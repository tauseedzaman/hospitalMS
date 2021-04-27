<?php

namespace App\Http\Livewire\Admins;

use App\Models\department;
use Livewire\Component;

class Docter extends Component
{
    public $name;
    public $email;
    public $pass;
    public $address;
    public $phone;
    public $department;
    public $specialization;
    public $photo_path;

    public function render()
    {
        return view('livewire.admins.docter');
    }
}
