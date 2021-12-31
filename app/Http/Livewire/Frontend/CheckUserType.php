<?php

namespace App\Http\Livewire\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Models\CarProfile;
use App\Models\District;
use App\Models\RentCar as RentCarInfo;
use Illuminate\Support\Facades\Session;

use Livewire\Component;

class CheckUserType extends Component
{
    public $car_id;
    public $pickup_district_id;
    public $destination_district_id;
    public $pick_up_point;
    public $destination_up_point;
    public $date;
    public $mobile;
    public $route;
    
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
        $sessionId = Auth::user();
        $AddToCart=AddToCart::whereSessionId($sessionId)->whereProductId($Product->id)->firstOrNew();
        $AddToCart->session_id=$sessionId;
        $AddToCart->product_id=$Product->id;
        $AddToCart->quantity=1;
        $AddToCart->price=$Product->price;
        $AddToCart->save();
    } 
    public function render()
    {
        // dd($this->route);
        // dd(Auth::user());
        if (Auth::user()->hasAnyRole('imam')) {
            return view('livewire.frontend.imam.home')->layout('layouts.front_end');
        }else if (Auth::user()->hasAnyRole('customer')) {
            $sessionId = Session::getId();
            $rents=RentCarInfo::whereSessionId(Auth::user()->id)->orderBy('id', 'DESC')->get();
            return view('livewire.backend.rent-car',[
                'rents'=>$rents,
                'cars'=>CarProfile::whereStatus('Free')->orderBy('id', 'DESC')->get(),
                'districts'=>District::get(),
            ])->layout('layouts.home');
        }else if (Auth::user()->hasAnyRole('user')) {

            return view('livewire.frontend.user.home')->layout('layouts.front_end_user');
        }
    }
}
