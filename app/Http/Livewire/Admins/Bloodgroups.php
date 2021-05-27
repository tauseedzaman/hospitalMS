<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;

class Bloodgroups extends Component
{
    public function render()
    {
        return view('livewire.admins.bloodgroups')->layout('admins.layouts.app');
    }
}
