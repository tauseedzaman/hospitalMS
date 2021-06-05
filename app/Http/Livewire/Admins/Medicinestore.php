<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use \App\Models\medicine;
use Livewire\WithPagination;

class Medicinestore extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $price;
    public $quantity;
    public $code;

    public $edit_medicine_id;
    public $button_text = "Add New Medicine";



    public function add_medicine()
    {
        if ($this->edit_medicine_id) {

            $this->update($this->edit_medicine_id);

        }else{
            $this->validate([
                'price' => 'required|numeric',
                'quantity' => 'required|numeric',
                'code' => 'required',
                ]);

                medicine::create([
                'price'         => $this->price,
                'quantity'         => $this->quantity,
                'code'         => $this->code,
            ]);

            $this->price="";
            $this->quantity="";
            $this->code="";

            session()->flash('message', 'Medicine Created successfully.');
        }

    }


     public function edit($id)
    {
        $Medicine = medicine::findOrFail($id);
        $this->edit_medicine_id = $id;

        $this->price = $Medicine->price;
        $this->quantity = $Medicine->quantity;
        $this->code = $Medicine->code;

        $this->button_text="Update Medicine";
    }

    public function update($id)
    {
        $this->validate([
                'price' => 'required|numeric',
                'quantity' => 'required|numeric',
                'code' => 'required',
            ]);

        $Medicine = medicine::findOrFail($id);
        $Medicine->price = $this->price;
        $Medicine->quantity = $this->quantity;
        $Medicine->code = $this->code;

        $Medicine->save();

        $this->price="";
        $this->quantity="";
        $this->code="";

        $this->edit_medicine_id="";

        session()->flash('message', 'Medicine Updated Successfully.');

        $this->button_text = "Add New Medicine";

}

     public function delete($id)
    {
        medicine::findOrFail($id)->delete();
        session()->flash('message', 'Medicine Deleted Successfully.');

            $this->price="";
            $this->quantity="";
            $this->code="";
}
    public function render()
    {
        return view('livewire.admins.medicinestore',[
            'medicines' => medicine::latest()->paginate(10)
        ])->layout('admins.layouts.app');
    }
}
