<?php

namespace App\Http\Livewire\Admins;
use App\Models\hod;
use App\Models\doctor;
use Livewire\Component;
use Livewire\WithPagination;

class Hods extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $doctor;

    public $edit_hod_id;
    public $button_text = "Add New HOD";

    public function add_hod()
    {
        if ($this->edit_hod_id) {

            $this->update($this->edit_hod_id);

        }else{
            $this->validate([
                'doctor' => 'required|numeric|unique:hods,doctor_id,except,id',
                ]);

            hod::create([
                'doctor_id'         => $this->doctor,
            ]);

            $this->doctor="";

            session()->flash('message', 'HOD Added successfully.');
        }

    }


     public function edit($id)
    {
        $block = hod::findOrFail($id);
        $this->edit_hod_id = $id;
        $this->doctor = $block->doctor_id;

        $this->button_text="Update HOD";
    }

    public function update($id)
    {
        $this->validate([
            'doctor_id' => 'required|numeric',
            ]);

        $hod = hod::findOrFail($id);
        $hod->doctor_id = $this->doctor;

        $hod->save();

        $this->doctor="";

        $this->edit_hod_id="";

        session()->flash('message', 'HOD Updated Successfully.');

        $this->button_text = "Add New HOD";

}

     public function delete($id)
    {
        hod::findOrFail($id)->delete();
        session()->flash('message', 'HOD Deleted Successfully.');

        $this->doctor="";
}
    public function render()
    {
        return view('livewire.admins.hods',[
            'doctors' => doctor::all(),
            'hods' => hod::latest()->paginate(10),
        ])->layout('admins.layouts.app');
    }
}
