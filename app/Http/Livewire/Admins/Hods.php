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
        $this->edit_hod_id = $id;
        $item = hod::find($id);
        $this->doctor = $item->doctor_id;
    }

    public function show_index()
    {
        $this->_page = "index";
    }

    public function add_hod()
    {
        $this->validate([
            'doctor' => 'required|numeric|unique:hods,doctor_id,except,id',
        ]);
        hod::create([
            'doctor_id' => $this->doctor,
        ]);
        $this->doctor = "";
        session()->flash('message', 'HOD Added successfully.');
        $this->_page = "index";
    }

    public function update()
    {
        $this->validate([
            'doctor' => 'required|numeric',
        ]);
        $hod = hod::findOrFail($this->edit_hod_id);
        $hod->doctor_id = $this->doctor;
        $hod->save();
        $this->doctor = "";
        $this->edit_hod_id = "";
        $this->_page = "index";
        session()->flash('message', 'HOD Updated Successfully.');
    }

    public function delete($IdToDelete)
    {
        hod::findOrFail($IdToDelete)->delete();
        session()->flash('message', 'HOD Deleted Successfully.');
        $this->doctor = "";
    }

    public function render()
    {
        if ($this->_page == "index") {
            return view('livewire.admins.hod.hods', [
                'hods' => hod::latest()->paginate(10),
            ])->layout('admins.layouts.app');
        } else if ($this->_page == "create") {
            $ids = hod::pluck('doctor_id')->toArray();
            return view('livewire.admins.hod.create', [
                'doctors' => doctor::whereNotIn('id', $ids)->get()
            ]);
        } else if ($this->_page == "edit") {
            $ids = hod::pluck('doctor_id')->toArray();
            return view('livewire.admins.hod.edit', [
                'doctors' => doctor::whereNotIn('id', $ids)->get()
            ]);
        }
    }
}
