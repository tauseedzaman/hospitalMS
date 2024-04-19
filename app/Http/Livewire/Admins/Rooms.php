<?php

namespace App\Http\Livewire\Admins;

use App\Models\department;
use App\Models\rooms as ModelsRooms;
use Livewire\Component;
use Livewire\WithPagination;

class Rooms extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $department;
    public $type;
    public $status;
    public $edit_Room_id;
    public $button_text = "Add New Room";

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
        $this->edit_Room_id = $id;
        $item = ModelsRooms::findOrFail($id);
        $this->department = $item->department_id;
        $this->type = $item->type;
        $this->status = $item->status;

    }

    public function show_index()
    {
        $this->_page = "index";
    }

    public function add_room()
    {
        if ($this->edit_Room_id) {

            $this->update($this->edit_Room_id);

        } else {
            $this->validate([
                'department' => 'required|numeric',
                'type' => 'required|in:ward,private,semi-private,general',
                'status' => 'required|in:available,occupied,maintenance',
            ]);

            ModelsRooms::create([
                'department_id' => $this->department,
                'type' => $this->type,
                'status' => $this->status,
            ]);

            $this->department = "";
            $this->type = "";
            $this->status = "";

            session()->flash('message', 'Room Created successfully.');
            $this->_page = "index";
        }

    }


    public function edit($id)
    {
        $Room = ModelsRooms::findOrFail($id);
        $this->edit_Room_id = $id;
        $this->department = $Room->department_id;
        $this->type = $Room->type;
        $this->status = $Room->status ? 'checked' : '';

        $this->button_text = "Update Room";
    }

    public function update($id)
    {
        $this->validate([
            'department' => 'required|numeric',
            'type' => 'required|in:ward,private,semi-private,general',
            'status' => 'required|in:available,occupied,maintenance',
        ]);


        $Room = ModelsRooms::findOrFail($id);
        $Room->department_id = $this->department;
        $Room->type = $this->type;
        $Room->status = $this->status;

        $Room->save();

        $this->department = "";
        $this->type = "";
        $this->status = "";
        $this->edit_Room_id = "";

        session()->flash('message', 'Room Updated Successfully.');
        $this->button_text = "Add New Room";
        $this->show_index();

    }

    public function delete($id)
    {
        ModelsRooms::findOrFail($id)->delete();
        session()->flash('message', 'Room Deleted Successfully.');

        $this->department = "";
        $this->type = "";
        $this->status = "";
        $this->button_text = "Add New Room";

    }
    public function render()
    {
        if ($this->_page == "index") {
            return view('livewire.admins.rooms.index', [
                'rooms' => ModelsRooms::latest()->paginate(10),
            ])->layout('admins.layouts.app');
        } else if ($this->_page == "create") {
            return view('livewire.admins.rooms.create', [
                'departments' => department::all()
            ]);
        } else if ($this->_page == "edit") {
            return view('livewire.admins.rooms.edit', [
                'departments' => department::all()
            ]);
        }
    }
}
