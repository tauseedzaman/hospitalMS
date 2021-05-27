<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;

class Bills extends Component
{
    public function render()
    {
        return view('livewire.admins.bills')->layout('admins.layouts.app');
    }
}
