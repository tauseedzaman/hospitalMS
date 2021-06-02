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
    public $roomtype;
    public $available;
    public $edit_Room_id;
    public $button_text = "Add New Room";

    public function add_room()
    {
        if ($this->edit_Room_id) {

            $this->update($this->edit_Room_id);

        }else{
            $this->validate([
                'department' => 'required|numeric',
                'roomtype' => 'required',
                ]);

            ModelsRooms::create([
                'department_id'         => $this->department,
                'roomtype'         => $this->roomtype,
                'available'         => $this->available ? true:false,
            ]);

            $this->department="";
            $this->roomtype="";
            $this->available="";

            session()->flash('message', 'Room Created successfully.');
        }

    }


     public function edit($id)
    {
        $Room = ModelsRooms::findOrFail($id);
        $this->edit_Room_id = $id;
        $this->department = $Room->department_id;
        $this->roomtype = $Room->roomtype;
        $this->available = $Room->available ? 'checked' : '';

        $this->button_text="Update Room";
    }

    public function update($id)
    {
        $this->validate([
                'department' => 'required|numeric',
                'roomtype' => 'required',
            ]);

        $Room = ModelsRooms::findOrFail($id);
        $Room->department_id = $this->department;
        $Room->roomtype = $this->roomtype;
        $Room->available = $this->available ? true:false;

        $Room->save();

        $this->department="";
        $this->roomtype="";
        $this->available="";
        $this->edit_Room_id="";

        session()->flash('message', 'Room Updated Successfully.');

        $this->button_text = "Add New Room";

}

     public function delete($id)
    {
        ModelsRooms::findOrFail($id)->delete();
        session()->flash('message', 'Room Deleted Successfully.');

            $this->department="";
            $this->roomtype="";
            $this->available="";
        $this->button_text = "Add New Room";

}
    public function render()
    {
        return view('livewire.admins.rooms',[
            'rooms' =>ModelsRooms::latest()->paginate(10),
            'departments' =>department::all()
        ])->layout('admins.layouts.app');
    }
}
