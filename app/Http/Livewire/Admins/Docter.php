<?php

namespace App\Http\Livewire\Admins;

use App\Models\department;
use App\Models\doctor;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithPagination;

use Livewire\WithFileUploads;

class Docter extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $name;
    public $Email;
    public $Password;
    public $Address;
    public $Phone;
    public $department = 'null';
    public $Specialization;
    public $Photo;

    public $edit_photo;
    public $edit_doctor_id;
    public $button_text = "Add New doctor";



    public function add_doctor()
    {
        if ($this->edit_photo) {

            $this->update($this->edit_doctor_id);

        }else{
            $this->validate([
                'name' => 'required||min:6|max:50',
                'Email' => 'required|email|unique:doctors,email,except,id',
                'Password' => 'required|min:6',
                'Address' => 'required',
                'Phone' => 'required|unique:doctors,phone,except,id',
                'department' => 'required',
                'Specialization' => 'required',
                'Photo' => 'required|image|max:3072', //3MB
                ]);
            doctor::create([
                'name'        => $this->name,
                'email'        => $this->Email,
                'password'        => bcrypt($this->Password),
                'address' => $this->Address,
                'phone' => $this->Phone,
                'department' => $this->department,
                'specialization' => $this->Specialization,
                'photo_path'  => $this->storeImage(),
            ]);
            //unset variables
            $this->name="";
            $this->Email="";
            $this->Password="";
            $this->Address="";
            $this->Phone="";
            $this->department="";
            $this->Specialization="";
            $this->address="";
            $this->Photo="";
            session()->flash('message', 'Doctor Created successfully.');
        }

    }

    public function storeImage()
    {
        if (!$this->Photo) {
            return null;
        }
        $imag   = ImageManagerStatic::make($this->Photo)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $imag);
        return env('APP_URL').'storage/'. $name;
    }

     public function edit($id)
    {
        $doctor = doctor::findOrFail($id);
        $this->edit_doctor_id = $id;

        $this->name = $doctor->name;
        $this->Email = $doctor->email;
        $this->Address = $doctor->address;
        $this->Phone = $doctor->phone;
        $this->department = $doctor->department;
        $this->Specialization = $doctor->specialization;
        $this->edit_photo = $doctor->photo_path;

        $this->button_text="Update Doctor";
    }
    public function update($id)
    {
        $this->validate([
                'name' => 'required||min:6|max:50',
                'Email' => 'required|email',
                'Password' => 'required|min:6',
                'Address' => 'required',
                'Phone' => 'required',
                'department' => 'required',
                'Specialization' => 'required',
            ]);

        $doctor = doctor::findOrFail($id);
        $doctor->name = $this->name;
        $doctor->email = $this->Email;
        $doctor->password = bcrypt($this->Password);
        $doctor->address = $this->Address;
        $doctor->phone = $this->Phone;
        $doctor->department = $this->department;
        $doctor->specialization = $this->Specialization;

        if ($this->Photo) {
            $this->validate([
                'Photo' => 'required|image|max:3072',
            ]);
            Storage::disk('public')->delete($doctor->photo_path);
            $doctor->photo_path = $this->storeImage();

        }

        $doctor->save();

        $this->name="";
        $this->Email="";
        $this->Password="";
        $this->Password="";
        $this->Address="";
        $this->Phone="";
        $this->department="";
        $this->Specialization="";
        $this->address="";
        $this->Photo="";
        $this->edit_photo="";

        session()->flash('message', 'doctor Updated Successfully.');

        $this->button_text = "Add New Docter";

}

     public function delete($id)
    {
        $doctor = doctor::find($id);
        Storage::disk('public')->delete($doctor->photo_path);
        $doctor->delete();
        session()->flash('message', 'doctor Deleted Successfully.');
    }
    public function render()
    {
        return view('livewire.admins.docter',[
            'doctors'=>doctor::latest()->paginate(10),
        ])->layout('admins.layouts.app');
    }
}
