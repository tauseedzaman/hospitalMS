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
    public $alloted_time = '';
    public $discharge_time = '';
    public $edit_bed_id;
    public $button_text = "Add New Bed";

    public $_page;
    public function mount()
    {
        $this->_page = 'index';
    }

    public function show_create_form()
    {
        $this->_page = "create";
    }

    public function show_edit_form($id)
    {
        $this->_page = "edit";
        $Room = ModelsBeds::findOrFail($id);
        $this->edit_bed_id = $id;
        $this->room_id = $Room->room_id;
        $this->patient_id = $Room->patient_id;
        $this->alloted_time = $Room->alloted_time;
        $this->discharge_time = $Room->discharge_time;

        $this->button_text = "Update Room";
    }

    public function show_index()
    {
        $this->_page = "index";
    }

    public function add_bed()
    {
        if ($this->edit_bed_id) {

            $this->update($this->edit_bed_id);

        } else {

            $this->validate([
                'room_id' => 'required|numeric',
                'patient_id' => 'required|numeric',
                'alloted_time' => "required",
            ]);

            ModelsBeds::create([
                'room_id' => $this->room_id,
                'patient_id' => $this->patient_id,
                'alloted_time' => $this->alloted_time,
                'status' => 'alloted',
            ]);

            $this->room_id = null;
            $this->patient_id = null;
            $this->alloted_time = null;

            session()->flash('message', 'Bed Assigned successfully.');
            $this->_page = "index";
        }

    }



    public function update($id)
    {
        $this->validate([
            'room_id' => 'required|numeric',
            'patient_id' => 'required|numeric',
            'alloted_time' => "required",
            'discharge_time' => "required",
        ]);

        $bed = ModelsBeds::findOrFail($id);
        $bed->room_id = $this->room_id;
        $bed->patient_id = $this->patient_id;
        $bed->alloted_time = $this->alloted_time;
        $bed->discharge_time = $this->discharge_time;
        $bed->status = "available";

        $bed->save();

        $this->room_id = null;
        $this->patient_id = null;
        $this->alloted_time = null;
        $this->discharge_time = null;

        $this->edit_bed_id = null;

        session()->flash('message', 'Bed Updated Successfully.');

        $this->button_text = "Add New Bed";
        $this->_page = "index";

    }

    public function delete($id)
    {
        ModelsBeds::findOrFail($id)->delete();
        session()->flash('message', 'Room Deleted Successfully.');

        $this->room_id = null;
        $this->patient_id = null;
        $this->alloted_time = null;
        $this->discharge_time = null;
    }
    public function render()
    {
        if ($this->_page == "index") {
            return view('livewire.admins.beds.index', [
                'beds' => ModelsBeds::latest()->paginate(10)
            ])->layout('admins.layouts.app');
        } else if ($this->_page == "create") {
            return view('livewire.admins.beds.create', [
                'patients' => patient::all(),
                'rooms' => rooms::where('status', 'available')->get(),
            ]);
        } else if ($this->_page == "edit") {
            return view('livewire.admins.beds.edit', [
                'patients' => patient::all(),
                'rooms' => rooms::where('status', 'available')->get(),
            ]);
        }
    }
}
