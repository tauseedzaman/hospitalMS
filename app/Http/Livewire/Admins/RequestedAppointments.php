<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use App\Models\requestedAppointment;
use App\Models\patient;
class RequestedAppointments extends Component
{
//     public $name;
//     public $email;
//     public $phone;
//     public $doctor;
//     public $message;

//     public $button_text = "Add New Patient";

//     public function add_patient()
//     {
//         if ($this->edit_patient_id) {

//             $this->update($this->edit_patient_id);

//         }else{
//             $this->validate([
//                 'name' => 'required||min:6|max:50',
//                 'email' => 'required|email',
//                 'doctor' => 'required',
//                 'phone' => 'required|numeric|max:10000000000000',
//                 'gender' => 'required',
//                 'age' => 'required',
//                 'bloodgroup' => 'required',
//                 'photo' => 'max:3072',
//                 ]);

//             requestedAppointment::create([
//                 'name'          => $this->name,
//                 'email'         => $this->email,
//                 'phone'         => $this->phone,
//                 'gender'        => $this->gender,
//                 'doctor'       => $this->doctor,
//                 'age'       => $this->age,
//                 'bloodgroup' => $this->bloodgroup,
//                 'photo_path'    => $this->storeImage(),
//             ]);
//             //unset variables
//             $this->name="";
//             $this->email="";
//             $this->doctor="";
//             $this->phone="";
//             $this->doctor="";

//             session()->flash('message', 'Patient Created successfully.');
//         }

//     }

//      public function edit($id)
//     {
//         $patient = requestedAppointment::findOrFail($id);
//         $this->edit_patient_id = $id;

//         $this->name = $patient->name;
//         $this->email = $patient->email;
//         $this->doctor = $patient->doctor;
//         $this->phone = $patient->phone;
//         $this->age = $patient->age;
//         $this->bloodgroup = $patient->bloodgroup;
//         $this->edit_photo = $patient->photo_path;

//         $this->button_text="Update Patient";
//     }

//     public function update($id)
//     {
//         $this->validate([
//                 'name' => 'required||min:6|max:50',
//                 'email' => 'required|email',
//                 'doctor' => 'required',
//                 'phone' => 'required',
//                 'age' => 'required',
//             ]);

//         $patient = patient::findOrFail($id);
//         $patient->name = $this->name;
//         $patient->email = $this->email;
//         $patient->doctor = $this->doctor;
//         $patient->age = $this->age;
//         $patient->bloodgroup = $this->bloodgroup;
//         $patient->phone = $this->phone;

//         if ($this->photo) {
//             $this->validate([
//                 'photo' => 'required|image|max:3072',
//             ]);
//             Storage::disk('public')->delete($patient->photo_path);
//             $patient->photo_path = $this->storeImage();

//         }

//         $patient->save();

//         $this->name="";
//         $this->email="";
//         $this->doctor="";
//         $this->phone="";
//         $this->bloodgroup="";
//         $this->doctor="";
//         $this->age="";
//         $this->photo="";
//         $this->edit_photo="";
//         $this->edit_patient_id="";

//         session()->flash('message', 'Patient Updated Successfully.');

//         $this->button_text = "Add New Patient";

// }
    public function add_patient($id)
    {
        $request = requestedAppointment::find($id);
        patient::create([
                'name'          => $request->name,
                'email'         => $request->email,
                'phone'         => $request->phone,
                'address'       => $request->address,
        ]);
        session()->flash('message', 'Patient Added Successfully.');
    }

     public function delete($id)
    {
        $patient = requestedAppointment::find($id)->delete();
        session()->flash('message', 'Appointment Deleted Successfully.');
    }
    public function render()
    {
        return view('livewire.admins.requested-appointments',[
            'all_requested_appointment' => requestedAppointment::all(),
        ])->layout('admins.layouts.app');
    }
}
