<?php

namespace App\Http\Livewire\Admins;
use App\Models\bill;
use App\Models\patient;
use Livewire\Component;
use Livewire\WithPagination;

class Bills extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $patients_id;
    public $amount;
    public $payed;
    public $edit_bill_id;
    public $button_text = "Add New Bill";

    public function add_bill()
    {
        if ($this->edit_bill_id) {

            $this->update($this->edit_bill_id);

        }else{

           $this->validate([
            'patients_id' => 'required',
            'amount' => 'required|numeric',
            ]);

            bill::create([
                'patients_id'         => $this->patients_id,
                'amount'         => $this->amount,
                'payed'         => $this->payed,
            ]);

           $this->amount=null;
            $this->patients_id=null;
            $this->payed=null;

            session()->flash('message', 'Bill Created successfully.');
        }

    }


     public function edit($id)
    {
        $bill = bill::findOrFail($id);
        $this->edit_bill_id = $id;
        $this->amount = $bill->amount;
        $this->patients_id = $bill->patients_id;
        $this->payed = $bill->payed;

        $this->button_text="Update Bill";
    }

    public function update($id)
    {
        $this->validate([
            'amount' => 'required|numeric',
            'patients_id' => 'required|numeric',
            ]);

        $bill = bill::findOrFail($id);
        $bill->amount = $this->amount;
        $bill->patients_id = $this->patients_id;
        $bill->payed = $this->payed;

        $bill->save();

        $this->amount=null;
        $this->patients_id=null;
        $this->payed=null;

        $this->edit_bill_id=null;

        session()->flash('message', 'Bill Updated Successfully.');

        $this->button_text = "Add New Bill";

}

     public function delete($id)
    {
        bill::findOrFail($id)->delete();
        session()->flash('message', 'Bill Deleted Successfully.');

        $this->amount=null;
        $this->patients_id=null;
        $this->payed=null;
        $this->discharge_time=null;
}
    public function render()
    {
        return view('livewire.admins.bills',[
            'bills' =>bill::latest()->paginate(10),
            'patients' =>patient::all()
        ])->layout('admins.layouts.app');
    }
}
