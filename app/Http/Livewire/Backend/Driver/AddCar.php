<?php

namespace App\Http\Livewire\Backend\Driver;
use App\Models\CarProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCar extends Component
{
    use WithFileUploads;

    public $type;
    public $name;
    public $car_no;
    public $seat;
    public $image;
    public $mobile;
    public $CarId;
    public function ChangeStatus($id){
        $Query=CarProfile::find($id);
        if($Query->status=="Free"){
            $Query->status="Busy";
        }else{
            $Query->status="Free";
        }
        $Query->save();
    }
    public function DeleteCar($id){
        CarProfile::find($id)->delete();
        Session::flash('message', 'You Are Deleted Your Car!');

    }
    public function EditCar($id){
       $Query=CarProfile::find($id);
       $this->CarId=$Query->id;
       $this->type=$Query->type;
       $this->name=$Query->name;
       $this->car_no=$Query->car_no;
       $this->seat=$Query->seat;
       $this->seat=$Query->seat;
       $Query->save();
    }
    public function mount(){
    }
    public function SaveImage(){
        $this->validate([
            'type' => 'required',
            'name' => 'required',
            'car_no' => 'required',
            'seat' => 'required',
            'mobile' => 'required',
        ]);
        
        if($this->CarId){
            $Query=CarProfile::find($this->CarId);
        }else{
            $this->validate([
                'image' => 'required',
            ]);
            $Query=new CarProfile();
            $Query->user_id=Auth::user()->id;
            $Query->status="Free";
        }
        $Query->type=$this->type;
        $Query->name=$this->name;
        $Query->car_no=$this->car_no;
        $Query->seat=$this->seat;
        $Query->mobile=$this->mobile;
        if($this->image){
            $path = $this->image->store('/public/photo');
            $Query->image = basename($path);
        }
        $Query->save();
        if($this->CarId){
            Session::flash('message', 'You are updated your Car!');
        }else{
            Session::flash('message', 'You are added your Car!');
        }
        $this->reset(['type', 'name', 'car_no', 'seat', 'image', 'CarId']);
    
    }
    public function render()
    {
        return view('livewire.backend.driver.add-car',[
            'cars'=>CarProfile::whereUserId(Auth::user()->id)->orderBy('id','DESC')->get(),
        ])->layout('layouts.front_end');
    }
}
