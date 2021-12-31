<?php

namespace App\Http\Livewire\Backend;
use App\Models\Backend\AddToCart;
use App\Models\Backend\Product;
use Livewire\Component;

class Cart extends Component
{
    public $search;
    public function DeleteFromCart($id){
       AddToCart::find($id)->delete();
    }
    public function IncreaseQuantity($id){
        $Query=AddToCart::find($id);
        $Query->quantity=$Query->quantity+1;
        $Query->save();
    }
    public function DeccreaseQuantity($id){
        $Query=AddToCart::find($id);
        if($Query->quantity>1){
            $Query->quantity=$Query->quantity-1;
            $Query->save();
        }
    }
    public function render()
    {
        $products=Product::whereIsActive(1)->orderBy('id','DESC');

        if($this->search){
            $products->where('name', 'LIKE' ,'%'.$this->search.'%')->orWhere('description', 'LIKE' ,'%'.$this->search.'%')->orWhere('price', 'LIKE' ,'%'.$this->search.'%');
        }
        return view('livewire.backend.cart',[
            'products'=>$products->get(),
        ])->layout('layouts.home');
    }
}
