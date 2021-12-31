<?php

namespace App\Http\Livewire\Backend;
use App\Models\Backend\Product;
use App\Models\Backend\AddToCart;
use App\Models\CarProfile;
use App\Models\District;
use App\Models\RentCar as RentCarInfo;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class RentCar extends Component
{
    public $car_id;
    public $pickup_district_id;
    public $destination_district_id;
    public $pick_up_point;
    public $destination_up_point;
    public $pick_up_point_change;
    public $destination_up_point_change;
    public $date;
    public $mobile;
    public $mobile_change;
    public $RentId;
    
    public function ChangePhone($id){
        $Query=RentCarInfo::find($id);
        if($this->mobile_change){
        $Query->mobile=$this->mobile_change;
        }
        if($this->pick_up_point_change){
        $Query->pick_up_point=$this->pick_up_point_change;
        }
        if($this->destination_up_point_change){
        $Query->destination_up_point=$this->destination_up_point_change;
        }
        $Query->save();
    }
    public function mount($id=NULL){
         $this->RentId=$id;
    }
    public function Disagree($id){
        $Query=RentCarInfo::find($id);
        $Query->status="Disagree";
        $Query->save();
    }
    public function Agree($id){
        $Query=RentCarInfo::find($id);
        $Query->status="Agree";
        $Query->save();
    }
    public function SaveRent(){
        $this->validate([
            'car_id' => 'required',
            'pickup_district_id' => 'required',
            'destination_district_id'=>'required',
            'pick_up_point'=>'required',
            'destination_up_point'=>'required',
            'date'=>'required',
            'mobile'=>'required',
        ]);
        
        $Query=new RentCarInfo();
        $sessionId = Session::getId();
        $Query->session_id=Auth::user()->id;
        $Query->car_id=$this->car_id;
        $Query->pickup_district_id=$this->pickup_district_id;
        $Query->destination_district_id=$this->destination_district_id;
        $Query->pick_up_point=$this->pick_up_point;
        $Query->destination_up_point=$this->destination_up_point;
        $Query->date=$this->date;
        $Query->mobile=$this->mobile;
        $Query->save();

        $this->reset();
    }
    public function DeleteFromCart($id){
        AddToCart::find($id)->delete();
    }
    public function AddToCart($id){
        $Product=Product::find($id);
        $sessionId = Session::getId();
        $AddToCart=AddToCart::whereSessionId($sessionId)->whereProductId($Product->id)->firstOrNew();
        $AddToCart->session_id=$sessionId;
        $AddToCart->product_id=$Product->id;
        $AddToCart->quantity=1;
        $AddToCart->price=$Product->price;
        $AddToCart->save();
    } 
    public function render()
    {
        $sessionId = Session::getId();
        $rents=RentCarInfo::whereSessionId(Auth::user()->id)->orderBy('id', 'DESC')->get();
        // dd($sessionId);
        // $cars=CarProfile::whereStatus('Free')->orderBy('id', 'DESC')->get();
        $cars=CarProfile::whereStatus('Free')->orderBy('id', 'DESC')->get();
        if($this->RentId){
            $cars=CarProfile::whereStatus('Free')->whereId($this->RentId)->orderBy('id', 'DESC')->get();
            foreach($cars as $car){
                $this->car_id=$car->id;
            }
            
        }
        return view('livewire.backend.rent-car',[
            'rents'=>$rents,
            'cars'=>$cars,
            'districts'=>District::get(),
        ])->layout('layouts.home');
    }
}
