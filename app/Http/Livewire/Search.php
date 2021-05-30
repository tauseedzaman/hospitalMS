<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $item;

    public function search()
    {
       dd( $this->item);
    }
    public function render()
    {
        return view('livewire.search');
    }
}
