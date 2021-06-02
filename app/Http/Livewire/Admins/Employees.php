<?php

namespace App\Http\Livewire\Admins;

use App\Models\employee;
use Livewire\Component;
use Livewire\WithPagination;

class Employees extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name;
    public $email;
    public $address;
    public $phone;
    public $gender;
    public $salary;
    public $job;

    public $edit_employee_id;
    public $button_text = "Add New Employee";



    public function add_employee()
    {
        if ($this->edit_employee_id) {

            $this->update($this->edit_employee_id);

        }else{
            $this->validate([
                'name' => 'required|min:4|max:50',
                'email' => 'required|email',
                'address' => 'required',
                'phone' => 'required|numeric',
                'gender' => 'required',
                'job' => 'required',
                'salary' => 'required|numeric',
                ]);

            employee::create([
                'name'          => $this->name,
                'email'         => $this->email,
                'address'         => $this->address,
                'phone'         => $this->phone,
                'gender'         => $this->gender,
                'job'           => $this->job,
                'salary'         => $this->salary,
            ]);

            $this->name="";
            $this->email="";
            $this->address="";
            $this->phone="";
            $this->gender="";
            $this->job="";
            $this->salary="";

            session()->flash('message', 'Employee Created successfully.');
        }

    }


     public function edit($id)
    {
        $employee = employee::findOrFail($id);
        $this->edit_employee_id = $id;

        $this->name = $employee->name;
        $this->email = $employee->email;
        $this->address = $employee->address;
        $this->phone = $employee->phone;
        $this->job = $employee->job;
        $this->gender = $employee->gender;
        $this->salary = $employee->salary;

        $this->button_text="Update Employee";
    }

    public function update($id)
    {
        $this->validate([
                'name' => 'required|min:4|max:50',
                'email' => 'required|email',
                'address' => 'required',
                'phone' => 'required|numeric',
                'gender' => 'required',
                'job' => 'required',
                'salary' => 'required|numeric',
            ]);

        $employee = employee::findOrFail($id);
        $employee->name = $this->name;
        $employee->email = $this->email;
        $employee->address = $this->address;
        $employee->phone = $this->phone;
        $employee->gender = $this->gender;
        $employee->job = $this->job;
        $employee->salary = $this->salary;

        $employee->save();

        $this->name="";
        $this->email="";
        $this->address="";
        $this->phone="";
        $this->gender="";
        $this->job="";
        $this->salary="";

        $this->edit_employee_id="";

        session()->flash('message', 'Employee Updated Successfully.');

        $this->button_text = "Add New Employee";

}

     public function delete($id)
    {
        employee::findOrFail($id)->delete();
        session()->flash('message', 'Employee Deleted Successfully.');

            $this->name="";
            $this->email="";
            $this->address="";
            $this->phone="";
            $this->gender="";
            $this->job="";
            $this->salary="";
}
    public function render()
    {
        return view('livewire.admins.employees',[
            'employees' => employee::latest()->paginate(10),
        ])->layout('admins.layouts.app');
    }
}
