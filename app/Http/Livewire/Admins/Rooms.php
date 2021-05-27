<?php

namespace App\Http\Livewire\Admins;

use App\Models\department;
use App\Models\rooms as ModelsRooms;
use Livewire\Component;

class Rooms extends Component
{

    public $department;
    public $edit_Room_id;
    public $button_text = "Add New Room";

    public function add_room()
    {
        if ($this->edit_Room_id) {

            $this->update($this->edit_Room_id);

        }else{
            $this->validate([
                'department' => 'required|numeric',
                ]);

            ModelsRooms::create([
                'department_id'         => $this->department,
            ]);

            $this->department="";

            session()->flash('message', 'Room Created successfully.');
        }

    }


     public function edit($id)
    {
        $Room = ModelsRooms::findOrFail($id);
        $this->edit_Room_id = $id;
        $this->department = $Room->department_id;

        $this->button_text="Update Room";
    }

    public function update($id)
    {
        $this->validate([
                'department' => 'required',
            ]);

        $Room = ModelsRooms::findOrFail($id);
        $Room->department_id = $this->department;

        $Room->save();

        $this->department="";
        $this->edit_Room_id="";

        session()->flash('message', 'Room Updated Successfully.');

        $this->button_text = "Add New Room";

}

     public function delete($id)
    {
        ModelsRooms::findOrFail($id)->delete();
        session()->flash('message', 'Room Deleted Successfully.');

            $this->department="";
}
    public function render()
    {
        return view('livewire.admins.rooms',[
            'rooms' =>ModelsRooms::all(),
            'departments' =>department::all()
        ])->layout('admins.layouts.app');
    }
}
