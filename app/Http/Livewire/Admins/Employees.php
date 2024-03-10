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
    public $address;
    public $status;
    public $image;
    public $_page;

    public function mount()
    {
        $this->_page = 'index';
    }

    public function show_create_form(){
        $this->_page="create";
    }

    public function add_employee(){
        $this->validate([
            "name"=>"required|string",
            "email"=>"required|email|unique:employees,email",
            "phone"=>"required|string|unique:employees,phone",
            "salary"=>"required|numeric",
            "address"=>"required|string",
            "qualification"=>"required|string",
            "position"=>"required|string|in:nurse,doctor,accountant,pharmacist,receptionist,cleaner,security,other",
            "status"=>"required|string|in:active,inactive",
            "image"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ]);

        $image = $this->image->store('employees', 'public');

        employee::create([
            "name"=>$this->name,
            "email"=>$this->email,
            "phone"=>$this->phone,
            "salary"=>$this->salary,
            "address"=>$this->address,
            "qualification"=>$this->qualification,
            "position"=>$this->position,
            "status"=>$this->status,
            "image"=>$image
        ]);

        $this->reset();
        session()->flash('message', 'Employee added successfully.');
        $this->_page="index";
    }


    public function render()
    {
        if ($this->_page == "index") {
            return view('livewire.admins.employ.index', [
                'employees' => employee::latest()->paginate(10),
            ])->layout('admins.layouts.app');

        } else if ($this->_page == "create") {
            return view('livewire.admins.employ.create', [
                'positions'=>["nurse", "doctor", "accountant", "pharmacist", "receptionist", "cleaner", "security", "other"]
            ])->layout('admins.layouts.app');
        }
    }
}
