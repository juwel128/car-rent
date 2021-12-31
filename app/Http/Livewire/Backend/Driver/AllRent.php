<?php

namespace App\Http\Livewire\Backend\Driver;
use App\Models\RentCar;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AllRent extends Component
{
    public $rent;

    public function IsAgree($id){
        $this->validate([
            'rent' => 'required',
        ]);
        $Query=RentCar::find($id);
        $Query->status="Is Agree?";
        $Query->rent=$this->rent;
        $Query->save();
    }
    public function render()
    {
        // dd(Auth::user()->id);
        return view('livewire.backend.driver.all-rent',[
            'rents'=>RentCar::orderBy('id', 'DESC')->get(),
        ])->layout('layouts.front_end');
    }
}
