<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\CarProfile;
use App\Models\District;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class RentCar extends Model
{
    use HasFactory;
    public function District1(){
        return $this->belongsTo(District::class, 'destination_district_id');
    }
    public function District(){
        return $this->belongsTo(District::class, 'pickup_district_id');
    }
    public function CarProfileCheck(){
        return $this->belongsTo(CarProfile::class, 'car_id')->whereUserId(Auth::user()->id);
    }
    public function CarProfile(){
        return $this->belongsTo(CarProfile::class, 'car_id');
    }
}
