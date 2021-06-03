<?php

namespace App\Http\Livewire\Admins;

use App\Models\beds as ModelsBeds;
use App\Models\rooms;
use App\Models\patient;
use Livewire\Component;
use Livewire\WithPagination;

class Beds extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $room;

    public $patient_id;
    public $room_id;
    public $alloted_time;
    public $discharge_time;
    public $edit_bed_id;
    public $button_text = "Add New Bed";

    public function add_bed()
    {
        if ($this->edit_bed_id) {

            $this->update($this->edit_bed_id);

        }else{
           $this->validate([
            'room_id' => 'required|numeric',
            'patient_id' => 'required|numeric|unique:beds,patient_id,except,id',
            'alloted_time' => 'required',
            'discharge_time' => 'required',
            ]);
            ModelsBeds::create([
                'room_id'         => $this->room_id,
                'patient_id'         => $this->patient_id,
                'alloted_time'         => $this->alloted_time,
                'discharge_time'         => $this->discharge_time,
            ]);

            $this->room_id="";
            $this->patient_id="";
            $this->alloted_time="";
            $this->discharge_time="";

            session()->flash('message', 'Bed Assigned successfully.');
        }

    }


     public function edit($id)
    {
        $Room = ModelsBeds::findOrFail($id);
        $this->edit_bed_id = $id;
        $this->room_id = $Room->room_id;
        $this->patient_id = $Room->patient_id;

        $this->button_text="Update Room";
    }

    public function update($id)
    {
        $this->validate([
            'room_id' => 'required|numeric',
            'patient_id' => 'required|numeric',
            'alloted_time' => 'required',
            'discharge_time' => 'required',
            ]);

        $Room = ModelsBeds::findOrFail($id);
        $Room->room_id = $this->room_id;
        $Room->patient_id = $this->patient_id;

        $Room->save();

        $this->room_id="";
        $this->patient_id="";
        $this->alloted_time="";
        $this->discharge_time="";

        $this->edit_bed_id="";

        session()->flash('message', 'Bed Updated Successfully.');

        $this->button_text = "Add New Bed";

}

     public function delete($id)
    {
        ModelsBeds::findOrFail($id)->delete();
        session()->flash('message', 'Room Deleted Successfully.');

        $this->room_id="";
        $this->patient_id="";
        $this->alloted_time="";
        $this->discharge_time="";
}
    public function render()
    {
        return view('livewire.admins.beds',[
            'patients' => patient::all(),
            'rooms' => rooms::where('available',true)->get(),
            'beds' => ModelsBeds::latest()->paginate(10)

        ])->layout('admins.layouts.app');
    }
}
