<?php

namespace App\Models\Backend;
use App\Models\Backend\OrderDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function OrderDetail(){
       return $this->hasMany(OrderDetail::class);
    }
    public function User(){
          return $this->belongsTo(User::class);
    }
}
