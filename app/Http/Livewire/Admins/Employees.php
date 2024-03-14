<?php

namespace App\Http\Livewire\Admins;

use App\Models\doctor;
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
    public $existing_image;
    public $_page;
    public $_edit_employ_id;
    public $_filter;
    public $selectedFilter;

    public function mount()
    {
        $this->_page = 'index';
        $this->_filter = 'all';
    }

    public function show_create_form()
    {
        $this->_page = "create";
    }

    public function show_edit_form($id)
    {
        $this->_page = "edit";
        $this->_edit_employ_id = $id;
        $employ = employee::find($id);
        $this->name = $employ->name;
        $this->email = $employ->email;
        $this->qualification = $employ->qualification;
        $this->phone = $employ->phone;
        $this->gender = $employ->gender;
        $this->salary = $employ->salary;
        $this->position = $employ->position;
        $this->address = $employ->address;
        $this->status = $employ->status;
        $this->existing_image = $employ->image;
    }

    public function show_index()
    {
        $this->_page = "index";
    }

    public function add_employee()
    {
        $this->validate([
            "name" => "required|string",
            "email" => "required|email|unique:employees,email",
            "phone" => "required|string|unique:employees,phone",
            "salary" => "required|numeric",
            "address" => "required|string",
            "qualification" => "required|string",
            "position" => "required|string|in:nurse,doctor,accountant,pharmacist,receptionist,cleaner,security,other",
            "status" => "required|string|in:active,inactive",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ]);

        $image = $this->image->store('employees', 'public');

        $employee = employee::create([
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "salary" => $this->salary,
            "address" => $this->address,
            "qualification" => $this->qualification,
            "position" => $this->position,
            "status" => $this->status,
            "image" => $image
        ]);

        if ($this->position == "doctor") {
            doctor::create([
                "employee_id" => $employee->id
            ]);
        }

        $this->reset();
        session()->flash('message', 'Employee added successfully.');
        $this->_page = "index";
    }

    public function set_filter($filter)
    {
        $this->_filter = $filter;
    }
    public function update_employee()
    {
        $this->validate([
            "name" => "required|string",
            "email" => "required|email",
            "phone" => "required|string",
            "salary" => "required|numeric",
            "address" => "required|string",
            "qualification" => "required|string",
            "position" => "required|string|in:nurse,doctor,accountant,pharmacist,receptionist,cleaner,security,other",
            "status" => "required|string|in:active,inactive",
            "image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ]);

        $employ = employee::find($this->_edit_employ_id);
        $image = $employ->image;

        if ($this->image) {
            \Storage::delete($employ->image);
            $image = $this->image->store('employees', 'public');

        }

        $employ->name = $this->name;
        $employ->email = $this->email;
        $employ->phone = $this->phone;
        $employ->salary = $this->salary;
        $employ->address = $this->address;
        $employ->qualification = $this->qualification;
        $employ->position = $this->position;
        $employ->status = $this->status;
        $employ->image = $image;
        $employ->save();
        $this->reset();



        session()->flash('message', 'Employee updated successfully.');
        $this->_page = "index";
    }

    public function delete($id)
    {
        $employ = Employee::find($id);

        if ($employ) {
            if ($employ->image) {
                \Storage::delete($employ->image);
            }

            $employ->delete();

            session()->flash('message', 'Employee deleted successfully.');
        } else {
            session()->flash('message', 'Employee not found.');
        }
    }



    public function render()
    {
        $this->selectedFilter = $this->_filter;

        $positions = ["nurse", "doctor", "accountant", "pharmacist", "receptionist", "cleaner", "security", "other"];
        if ($this->_page == "index") {
            if ($this->_filter == "all") {
                $data = employee::latest()->paginate(10);
            } else {
                $data = employee::where('position', $this->_filter)->latest()->paginate(10);
            }
            return view('livewire.admins.employ.index', [
                'employees' => $data,
                'positions' => $positions
            ])->layout('admins.layouts.app');

        } else if ($this->_page == "create") {
            return view('livewire.admins.employ.create', [
                'positions' => $positions
            ])->layout('admins.layouts.app');
        } else if ($this->_page == "edit") {
            return view('livewire.admins.employ.edit', [
                'positions' => $positions
            ])->layout('admins.layouts.app');
        }
    }
}
