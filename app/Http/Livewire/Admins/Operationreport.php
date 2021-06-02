<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use App\Models\doctor;
use App\Models\operationreport as ModelsOperationreport;
use App\Models\patient;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Operationreport extends Component
{

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $patient;
    public $details;
    public $doctor;
    public $time;

    public $edit_operation_report_id;
    public $button_text = "Add New Operation Report";



    public function add_operationreport()
    {
        if ($this->edit_operation_report_id) {

            $this->update($this->edit_operation_report_id);

        }else{
            $this->validate([
                'patient' => 'required',
                'doctor' => 'required',
                'details' => 'required',
                'time' => 'required',
                ]);

            ModelsOperationreport::create([
                'patient'          => $this->patient,
                'description'         => $this->details,
                'doctor'         => $this->doctor,
                'time'         => $this->doctor,
            ]);

            $this->patient="";
            $this->details="";
            $this->doctor="";
            $this->time="";

            session()->flash('message', 'Operation Report Created successfully.');
        }

    }


     public function edit($id)
    {
        $Operationreport = ModelsOperationreport::findOrFail($id);
        $this->edit_operation_report_id = $id;

        $this->patient = $Operationreport->patient;
        $this->details = $Operationreport->description;
        $this->doctor = $Operationreport->doctor;
        $this->time = $Operationreport->time;

        $this->button_text="Update Operation Report";
    }

    public function update($id)
    {
        $this->validate([
                'patient' => 'required',
                'details' => 'required',
                'doctor' => 'required',
                'time' => 'required',
            ]);

        $Operationreport = ModelsOperationreport::findOrFail($id);
        $Operationreport->patient = $this->patient;
        $Operationreport->description = $this->details;
        $Operationreport->doctor = $this->doctor;
        $Operationreport->time = $this->time;

        $Operationreport->save();

        $this->patient="";
        $this->details="";
        $this->doctor="";
        $this->time="";
        $this->edit_operation_report_id="";

        session()->flash('message', 'Operation Report Updated Successfully.');

        $this->button_text = "Add New Operation Report";

}

     public function delete($id)
    {
        ModelsOperationreport::findOrFail($id)->delete();
        session()->flash('message', 'Operationreport Deleted Successfully.');

        $this->patient="";
        $this->details="";
        $this->doctor="";
        $this->time="";
}

    public function render()
    {
        return view('livewire.admins.operationreport',[
            'OperationReports' => ModelsOperationreport::latest()->paginate(10),
            'doctors' => doctor::all(),
            'patients' => patient::all(),
        ])->layout('admins.layouts.app');
    }
}
