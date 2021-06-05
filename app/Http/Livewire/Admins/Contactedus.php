<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use App\Models\contact;
use Livewire\WithPagination;

class Contactedus extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function delete($id)
    {
        contact::findOrFail($id)->delete();
        session()->flash('message', 'Message Deleted Successfully.');

}
    public function render()
    {
        return view('livewire.admins.contactedus',[
            'contacted' => contact::latest()->paginate(5),
        ])->layout('admins.layouts.app');
    }
}
