<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use App\Models\block;
use Livewire\WithPagination;

class Blocks extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $blockfloor;
    public $blockcode;

    public $edit_block_id;
    public $button_text = "Add New Block";

    public function add_block()
    {
        if ($this->edit_block_id) {

            $this->update($this->edit_block_id);

        }else{
            $this->validate([
                'blockfloor' => 'required|numeric',
                'blockcode' => 'required|numeric',
                ]);

            block::create([
                'blockfloor'         => $this->blockfloor,
                'blockcode'         => $this->blockcode,
            ]);

            $this->blockcode="";
            $this->blockfloor="";

            session()->flash('message', 'Block Created successfully.');
        }

    }


     public function edit($id)
    {
        $block = block::findOrFail($id);
        $this->edit_block_id = $id;
        $this->blockcode = $block->blockcode;
        $this->blockfloor = $block->blockfloor;

        $this->button_text="Update Block";
    }

    public function update($id)
    {
        $this->validate([
            'blockcode' => 'required|numeric',
            'blockfloor' => 'required|numeric',
            ]);

        $block = block::findOrFail($id);
        $block->blockfloor = $this->blockfloor;
        $block->blockcode = $this->blockcode;

        $block->save();

        $this->blockcode="";
        $this->blockfloor="";

        $this->edit_block_id="";

        session()->flash('message', 'Block Updated Successfully.');

        $this->button_text = "Add New Block";

}

     public function delete($id)
    {
        block::findOrFail($id)->delete();
        session()->flash('message', 'Block Deleted Successfully.');

        $this->blockcode="";
        $this->blockfloor="";
}
    public function render()
    {
        return view('livewire.admins.blocks',[
            'blocks' =>block::latest()->paginate(10)
        ])->layout('admins.layouts.app');
    }
}
