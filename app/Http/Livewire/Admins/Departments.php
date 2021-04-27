<?php

namespace App\Http\Livewire\Admins;

use App\Models\department;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;

class Departments extends Component
{
    public $name;
    public $descriptions;
    public $photo;


    public function add_department()
    {
        $this->validate([
            'name' => 'required|max:50',
            'descriptions' => 'required|max:255',
            'photo' => 'required|photo',
            ]);

        $image          = $this->storeImage();
        department::create([
            'name'              => $this->name,
            'description' => $this->descriptions,
            'photo_path'             => $image,
        ]);
        reset($this->name);
        reset($this->descriptions);
        reset($this->photo);
    }

    public function storeImage()
    {
        if (!$this->photo) {
            return null;
        }

        $img   = ImageManagerStatic::make($this->image)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $img);
        return $name;
    }


    public function render()
    {
        return view('livewire.admins.departments');
    }
}
