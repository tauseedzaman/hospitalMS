<?php

namespace App\Http\Livewire\Admins;
use App\Models\hod;
use App\Models\doctor;
use Livewire\Component;

class Hods extends Component
{

    public $doctor_id;

    public $edit_hod_id;
    public $button_text = "Add New HOD";

    public function add_block()
    {
        if ($this->edit_hod_id) {

            $this->update($this->edit_hod_id);

        }else{
            $this->validate([
                'doctor_id' => 'required|numeric|unique:hod,doctor_id,except,id',
                ]);

            hod::create([
                'doctor_id'         => $this->doctor_id,
            ]);

            $this->doctor_id="";

            session()->flash('message', 'HOD Added successfully.');
        }

    }


     public function edit($id)
    {
        $block = hod::findOrFail($id);
        $this->edit_hod_id = $id;
        $this->doctor_id = $block->doctor_id;

        $this->button_text="Update HOD";
    }

    public function update($id)
    {
        $this->validate([
            'doctor_id' => 'required|numeric',
            ]);

        $hod = hod::findOrFail($id);
        $hod->doctor_id = $this->doctor_id;

        $hod->save();

        $this->doctor_id="";

        $this->edit_hod_id="";

        session()->flash('message', 'HOD Updated Successfully.');

        $this->button_text = "Add New HOD";

}

     public function delete($id)
    {
        hod::findOrFail($id)->delete();
        session()->flash('message', 'HOD Deleted Successfully.');

        $this->doctor_id="";
}
    public function render()
    {
        return view('livewire.admins.hods',[
            'doctors' => doctor::all(),
            'hods' => hod::all(),
        ])->layout('admins.layouts.app');
    }
}
