<?php

namespace App\Http\Livewire;
use App\Models\requestedappointment;
use Livewire\Component;

class Appointmentform extends Component
{
    public $name;
    public $email;
    public $phone;
    public $doctor;
    public $stime;
    public $address;
    public $message;

    public function store_requested_appointment()
    {
        $this->validate([
            'name' => 'required|',
            'email' => 'required|email',
            'stime' => 'required',
            'phone' => 'required|numeric|max:10000000000000',
            'doctor' => 'required',
            'address' => 'required',
            'message' => 'required|max:550',
            ]);

        requestedappointment::create([
            'name'          => $this->name,
            'email'         => $this->email,
            'phone'         => $this->phone,
            'stime'       => $this->stime,
            'address'       => $this->address,
            'doctor'       => $this->doctor,
            'message' => $this->message,
        ]);

           //unset variables
           $this->name="";
           $this->email="";
           $this->stime="";
           $this->phone="";
           $this->doctor="";
           $this->address="";
           $this->message="";

           session()->flash('message', 'Your Appointment Added successfully.');
    }
    public function render()
    {
        return view('livewire.appointmentform');
    }
}
