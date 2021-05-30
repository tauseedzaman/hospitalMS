<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use App\Models\subscriber;
class Subscibers extends Component
{

     public function delete($id)
    {
        subscriber::findOrFail($id)->delete();
        session()->flash('message', 'Subscriber Deleted Successfully.');

}
    public function render()
    {
        return view('livewire.admins.subscibers',[
            'subscribers' => subscriber::paginate(2)
        ])->layout('admins.layouts.app');
    }
}
