<?php

namespace App\Http\Livewire\Backend;
use App\Models\Backend\Category as CategoryInfo;
use App\Models\Backend\Product;
use App\Models\Backend\Order;
use App\Models\Backend\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Category extends Component
{
    public $code;
    public $name;
    public $is_active=1;
    public $CategoryId;
   
    public function DeleteCategory($id){
        CategoryInfo::find($id)->delete();
        Session::flash('message', 'You are deleted your category!');

    }
    public function EditCategory($id){
       $Query=CategoryInfo::find($id);
       $this->CategoryId=$Query->id;
       $this->code=$Query->code;
       $this->name=$Query->name;
       $this->is_active=$Query->is_active;
    }
    public function mount(){
        $this->code = floor(time() - 99999);
    }
    public function SaveCategory(){
        $this->validate([
            // 'date' => 'required',
            'code' => 'required',
            'name' => 'required',
            'is_active'=>'required',
        ]);
        if($this->CategoryId){
            $Query=CategoryInfo::find($this->CategoryId);
        }else{
            $Query=new CategoryInfo();
        }
        $Query->user_id=Auth::user()->id;
        $Query->code=$this->code;
        $Query->name=$this->name;
        $Query->is_active=$this->is_active;
        $Query->save();
        $this->reset(['code','name', 'is_active']);
        $this->code = floor(time() - 99999);
        if($this->CategoryId){
            Session::flash('message', 'You are updated your category!');
        }else{
            Session::flash('message', 'You are added your category!');
        }
    
    }
    public function render()
    {
        return view('livewire.backend.category',[
            'categories'=>CategoryInfo::whereUserId(Auth::user()->id)->orderBy('id','DESC')->whereIsActive(1)->paginate(10),
        ])->layout('layouts.front_end');
    }
}
