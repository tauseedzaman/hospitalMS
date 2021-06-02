<?php

namespace App\Http\Livewire\Admins;

use App\Models\nurse;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Nurses extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $name;
    public $email;
    public $phone;
    public $gender;
    public $address;
    public $qualification;
    public $photo;
    public $position;
    public $registered;

    public $edit_photo;
    public $edit_nurse_id;
    public $button_text = "Add New nurse";



    public function add_nurse()
    {
        if ($this->edit_photo) {

            $this->update($this->edit_nurse_id);

        }else{
            $this->validate([
                'name' => 'required||min:6|max:50',
                'email' => 'required|email',
                'position' => 'required',
                'registered' => 'required',
                'address' => 'required',
                'phone' => 'required|numeric',
                'gender' => 'required',
                'qualification' => 'required',
                'photo' => 'required|image|max:3072',
                ]);

            nurse::create([
                'name'          => $this->name,
                'email'         => $this->email,
                'phone'         => $this->phone,
                'gender'        => $this->gender,
                'address'       => $this->address,
                'qualification' => $this->qualification,
                'photo_path'    =>$this->storeImage(),
                'position'    =>$this->position,
                'registered'    =>$this->registered,
            ]);
            //unset variables
            $this->name="";
            $this->email="";
            $this->password="";
            $this->address="";
            $this->phone="";
            $this->qualification="";
            $this->address="";
            $this->photo="";
            $this->position="";
            $this->registered="";
            session()->flash('message', 'Nurse Created successfully.');
        }

    }

    public function storeImage()
    {

        if (!$this->photo) {
            return null;
        }
        $imag   = ImageManagerStatic::make($this->photo)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $imag);
        return $name;
    }

     public function edit($id)
    {
        $nurse = nurse::findOrFail($id);
        $this->edit_nurse_id = $id;

        $this->name = $nurse->name;
        $this->email = $nurse->email;
        $this->address = $nurse->address;
        $this->phone = $nurse->phone;
        $this->qualification = $nurse->qualification;
        $this->edit_photo = $nurse->photo_path;
        $this->position = $nurse->position;

        $this->button_text="Update nurse";
    }
    public function update($id)
    {
        $this->validate([
                'name' => 'required||min:6|max:50',
                'email' => 'required|email',
                'address' => 'required',
                'phone' => 'required',
                'position' => 'required',
                'registered' => 'required',
            ]);

        $nurse = nurse::findOrFail($id);
        $nurse->name = $this->name;
        $nurse->email = $this->email;
        $nurse->address = $this->address;
        $nurse->phone = $this->phone;
        $nurse->position = $this->position;
        $nurse->registered = $this->registered;

        if ($this->photo) {
            $this->validate([
                'photo' => 'required|image|max:3072',
            ]);
            Storage::disk('public')->delete($nurse->photo_path);
            $nurse->photo_path = $this->storeImage();

        }

        $nurse->save();

        $this->name="";
        $this->email="";
        $this->address="";
        $this->phone="";
        $this->qualification="";
        $this->address="";
        $this->photo="";
        $this->edit_photo="";
        $this->registered="";
        $this->position="";

        session()->flash('message', 'Nurse Updated Successfully.');

        $this->button_text = "Add New Nurse";

}

     public function delete($id)
    {
        $nurse = nurse::find($id);
        Storage::disk('public')->delete($nurse->photo_path);
        $nurse->delete();
        session()->flash('message', 'nurse Deleted Successfully.');
    }


    public function render()
    {
        return view('livewire.admins.nurses',[
            'nurses' =>nurse::latest()->paginate(10),
        ])->layout('admins.layouts.app');
    }
}
