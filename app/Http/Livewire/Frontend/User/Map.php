<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;

class Map extends Component
{
    public function render()
    {
        return view('livewire.frontend.user.map')->layout('layouts.front_end_user');
    }
}
