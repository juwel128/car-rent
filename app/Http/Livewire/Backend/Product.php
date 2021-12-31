<?php

namespace App\Http\Livewire\Backend;
use App\Models\Backend\Category;
use App\Models\Backend\Product as ProductInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;

class Product extends Component
{
    use WithFileUploads;

    public $category_id;
    public $code;
    public $name;
    public $image;
    public $price;
    public $description;
    public $is_active=1;
    public $unit;
    public $ProductId;
    public function DeleteProduct($id){
        ProductInfo::find($id)->delete();
        Session::flash('message', 'You are deleted your product!');

    }
    public function EditProduct($id){
       $Query=ProductInfo::find($id);
       $this->ProductId=$Query->id;
       $this->category_id=$Query->category_id;
       $this->code=$Query->code;
       $this->name=$Query->name;
       $this->price=$Query->price;
       $this->description=$Query->description;
       $this->is_active=$Query->is_active;
       $this->unit=$Query->unit;
    }
    public function mount(){
        $this->code = floor(time() - 99999);
    }
    public function SaveProduct(){
        $this->validate([
            'category_id' => 'required',
            'code' => 'required',
            'name' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'is_active'=>'required',
        ]);
        if($this->ProductId){
            $Query=ProductInfo::find($this->ProductId);
        }else{
            $this->validate([
                'image' => 'required',
            ]);
            $Query=new ProductInfo();
        }
        $Query->user_id=Auth::user()->id;
        $Query->category_id=$this->category_id;
        $Query->code=$this->code;
        $Query->name=$this->name;
        if($this->image){
            $path = $this->image->store('/public/photo');
            $Query->image = basename($path);
        }
        $Query->unit=$this->unit;
        $Query->price=$this->price;
        $Query->description=$this->description;
        $Query->is_active=$this->is_active;
        $Query->save();
        $this->reset(['code','category_id','unit', 'name','price','description','ProductId','is_active']);
        $this->code = floor(time() - 99999);
        if($this->ProductId){
            Session::flash('message', 'You are updated your product!');
        }else{
            Session::flash('message', 'You are added your product!');
        }
    
    }
    public function render()
    {
        return view('livewire.backend.product',[
            'categories'=>Category::whereUserId(Auth::user()->id)->get(),
            'productss'=>ProductInfo::whereUserId(Auth::user()->id)->orderBy('id','DESC')->paginate(10),
        ])->layout('layouts.front_end');
    }
}
