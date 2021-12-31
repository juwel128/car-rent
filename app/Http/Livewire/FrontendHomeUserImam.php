<?php

namespace App\Http\Livewire;
use App\Models\CarProfile;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class FrontendHomeUserImam extends Component
{
    public function render()
    {
        return view('livewire.frontend-home-user-imam',[
            'cars'=>CarProfile::orderBy('id','DESC')->get(),
        ])->layout('layouts.home');
    }
}
