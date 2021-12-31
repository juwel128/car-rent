<?php

namespace App\Http\Livewire\Backend;
use App\Models\Backend\Order;
use App\Models\Backend\OrderDetail;
use App\Models\Backend\AddToCart;
use App\Models\Backend\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Checkout extends Component
{
    public $phone;
    public $address;
    public $description;
    public $search;
    
    public function DeleteFromCart($id){
        AddToCart::find($id)->delete();
    }
    public function ConfirmOrder(){
        $this->validate([
            'phone' => 'required',
            'address' => 'required',
        ]);

        DB::transaction(function () {
            $sessionId = Session::getId();
            $total=0;
           $carts=AddToCart::whereSessionId($sessionId)->get();
           foreach($carts as $cart){
            $total+=$cart->price;
           }

           $Order=new Order();
           $Order->total=$total;
           $Order->phone=$this->phone;
           $Order->address=$this->address;
           $Order->description=$this->description;
           $Order->status='Pending';
           $Order->save();

           foreach($carts as $cart){
              $OrderDetail=new OrderDetail();
              $OrderDetail->order_id=$Order->id;
              $OrderDetail->product_id=$cart->product_id;
              $OrderDetail->quantity=$cart->quantity;
              $OrderDetail->total=$cart->price*$cart->quantity;
              $OrderDetail->save();
           }
           AddToCart::whereSessionId($sessionId)->delete();
           $this->reset(['phone', 'address', 'description']);
           Session::flash('message', 'Order Confirmed!');

        });
    }
    public function render()
    {
        $products=Product::whereIsActive(1)->orderBy('id','DESC');
        if($this->search){
            $products->where('name', 'LIKE' ,'%'.$this->search.'%')->orWhere('description', 'LIKE' ,'%'.$this->search.'%')->orWhere('price', 'LIKE' ,'%'.$this->search.'%');
        }
        return view('livewire.backend.checkout',[
            'products'=>$products->get(),
        ])->layout('layouts.home');
    }
}
