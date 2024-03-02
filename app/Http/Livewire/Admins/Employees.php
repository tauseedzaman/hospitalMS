<?php

namespace App\Http\Livewire\Admins;

use App\Models\employee;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Employees extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $name;
    public $email;
    public $qualification;
    public $phone;
    public $gender;
    public $salary;
    public $position;
    public $status;
    public $image;

    public function render()
    {
        return view('livewire.admins.employ.index',[
            'employees' => employee::latest()->paginate(10),
        ])->layout('admins.layouts.app');
    }
}
