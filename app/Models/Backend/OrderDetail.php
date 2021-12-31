<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Backend\Order;
use App\Models\Backend\Product;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    public function Order(){
        return $this->belongsTo(Order::class);
    }
    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
