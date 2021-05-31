<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\contact;
class Contactus extends Component
{
    public $name;
    public $phone;
    public $subject;
    public $message;
    public $email;

    public function add_to_contact()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'email' => 'required|email',
            ]);

        contact::create([
            'name'         => $this->name,
            'phone'         => $this->phone,
            'email'         => $this->email,
            'subject'         => $this->subject,
            'message'         => $this->message,
        ]);

           //unset variables
           $this->email="";
           $this->name="";
           $this->phone="";
           $this->subject="";
           $this->message="";

           session()->flash('message', 'Message Submitted Successfully!.');
    }
    public function render()
    {
        return view('livewire.contactus');
    }
}
