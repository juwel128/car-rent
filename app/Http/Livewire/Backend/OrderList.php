<?php

namespace App\Http\Livewire\Backend;
use App\Models\Backend\Product;
use App\Models\Backend\OrderDetail;
use Livewire\Component;

class OrderList extends Component
{
    public function Paid($id){
        $UpdateQuery=OrderDetail::find($id);
        $UpdateQuery->commission="Paid";
        $UpdateQuery->save();
    }
    public function Unpaid($id){
        $UpdateQuery=OrderDetail::find($id);
        $UpdateQuery->commission="Due";
        $UpdateQuery->save();
    }
    public function render()
    {
        return view('livewire.backend.order-list',[
            'products'=>Product::get(),
        ]);
    }
}
