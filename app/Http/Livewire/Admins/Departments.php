<?php

namespace App\Http\Livewire\Admins;
use App\Models\department;
use App\Models\hod;
use App\Models\block;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Departments extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $name;
    public $head;
    public $block;
    public $descriptions;
    public $photo;
    public $edit_photo;
    public $edit_department_id;
    public $button_text = "Add New Department";


    public function add_department()
    {
        if ($this->edit_photo) {

            $this->update($this->edit_department_id);

        }else{
            $this->validate([
                'name' => 'required|max:50',
                'descriptions' => 'required|max:255',
                'head' => 'required|numeric|unique:departments,hod_id,except,id',
                'block' => 'required|numeric',
                'photo' => 'required|image|max:3072', //3MB
                ]);
            department::create([
                'name'        => $this->name,
                'block_id'        => $this->block,
                'description' => $this->descriptions,
                'hod_id' => $this->head,
                'photo_path'  => $this->storeImage(),
            ]);
            $this->name="";
            $this->descriptions="";
            $this->photo="";
            $this->head="";
            $this->block="";
            session()->flash('message', 'Department Created successfully.');
        }

    }

    public function storeImage()
    {
        if (!$this->photo) {
            return null;
        }
        $imag   = ImageManagerStatic::make($this->photo)->encode('jpg');
        $img = $imag->resize(320, 240);
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $img);
        return env('APP_URL').'storage/'.$name;
    }

     public function edit($id)
    {
        $department = department::findOrFail($id);
        $this->edit_department_id = $id;
        $this->name = $department->name;
        $this->block = $department->block_id;
        $this->descriptions = $department->description;
        $this->head = $department->hod_id;
        $this->edit_photo = $department->photo_path;
        $this->button_text="Update Department";
    }
    public function update($id)
    {
        $this->validate([
            'name' => 'required|max:50',
            'descriptions' => 'required|max:255',
            'head' => 'required',
            'block' => 'required',
            ]);

        $department = department::findOrFail($id);
        $department->name = $this->name;
        $department->description = $this->descriptions;
        $department->hod_id = $this->head;
        $department->block_id = $this->block;
        if ($this->photo) {
            $this->validate([
                'photo' => 'image|max:3072',
            ]);
            Storage::disk('public')->delete($department->photo_path);
            $department->photo_path = $this->storeImage();

        }
        $department->save();
        $this->name="";
        $this->descriptions="";
        $this->edit_photo="";
        $this->head="";
        $this->photo="";
        $this->block="";
        session()->flash('message', 'Department Updated Successfully.');
        $this->button_text = "Add New Department";

}

     public function delete($id)
    {
        $department = department::find($id);
        Storage::disk('public')->delete($department->photo_path);
        $department->delete();
        session()->flash('message', 'Department Deleted Successfully.');
    }


    public function render()
    {

        return view('livewire.admins.departments',[
            'departments' => department::latest()->paginate(10),
            'hods' => hod::all(),
            'blocks' => block::all(),
        ])->layout('admins.layouts.app');
    }
}
