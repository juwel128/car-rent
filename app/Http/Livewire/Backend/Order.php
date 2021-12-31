<?php

namespace App\Http\Livewire\Backend;
use App\Models\Backend\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        return view('livewire.backend.order',[
            'products'=>Product::whereUserId(Auth::user()->id)->get(),
        ])->layout('layouts.front_end');
    }
}
