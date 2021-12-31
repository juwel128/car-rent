<?php

namespace App\Models\Backend;
use App\Models\Backend\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddToCart extends Model
{
    use HasFactory;
    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
