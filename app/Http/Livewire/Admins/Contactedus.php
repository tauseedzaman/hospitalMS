<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use App\Models\contact;
class Contactedus extends Component
{
    public function delete($id)
    {
        contact::findOrFail($id)->delete();
        session()->flash('message', 'Message Deleted Successfully.');

}
    public function render()
    {
        return view('livewire.admins.contactedus',[
            'contacted' => contact::all(),
        ])->layout('admins.layouts.app');
    }
}
