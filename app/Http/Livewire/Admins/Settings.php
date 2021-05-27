<?php

namespace App\Http\Livewire\Admins;

use App\Models\general_settings;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Settings extends Component
{

    use WithFileUploads;

    public $title;
    public $business_email;
    public $favicon;
    public $business_phone;
    public $address;
    public $description;
    public $working_horse;
    public $logo;
    public $icon_logo;

    public $c_logo;
    public $c_icon_logo;
    public $c_favicon;

    public $edit_logo;
    public $edit_favicon;
    public $btn_text="Save";



    public function add_general_settings()
    {

            $this->validate([
                'title' => 'required',
                'business_email' => 'required|email',
                'address' => 'required',
                'business_phone' => 'required',
                'working_horse' => 'required',
                'description' => 'required',
                ]);
                if (!$this->c_favicon) {
                    $this->validate([
                        'favicon' => 'required|image'
                    ]);
                  $favicon = $this->storeImage($this->favicon);

                }
                if (!$this->c_icon_logo) {
                    $this->validate([
                        'icon_logo' => 'required|image'
                    ]);
                  $icon_logo = $this->storeImage($this->icon_logo);

                }
                if (!$this->c_logo) {
                    $this->validate([
                        'logo' => 'required|image'
                    ]);
                  $logo = $this->storeImage($this->logo);
                }

            general_settings::create([
                'title'          => $this->title,
                'business_email' => $this->business_email,
                'favicon_path'   => ($favicon ?? $this->c_favicon),
                'address'        => $this->address,
                'business_phone' => $this->business_phone,
                'description'    => $this->description,
                'logo_path'      => ($logo ?? $this->c_logo),
                'icon_logo_path'      => ($icon_logo ?? $this->c_icon_logo),
                'working_horse'      => $this->working_horse,
            ]);

            $this->title="";
            $this->business_email="";
            $this->favicon="";
            $this->address="";
            $this->business_phone="";
            $this->description="";
            $this->address="";
            $this->working_horse="";
            $this->logo="";
            $this->icon_logo="";
            session()->flash('message', 'Operation successfull.');

    }

    public function storeImage($image)
    {
        if (!$image) {
            return null;
        }
        $imag   = ImageManagerStatic::make($image)->encode('png');
        $name  = Str::random() . '.png';
        Storage::disk('public')->put($name, $imag);
        return $name;
    }


     public function edit($id)
    {
        $setting = general_settings::findOrFail($id);
        $this->edit_setting_id = $id;

        $this->title = $setting->title;
        $this->business_email = $setting->business_email;
        $this->address = $setting->address;
        $this->business_phone = $setting->business_phone;
        $this->address = $setting->address;
        $this->description = $setting->description;
        $this->working_horse = $setting->working_horse;
        $this->edit_logo = $setting->logo_path;
        // $this->edit_logo = $setting->c_icon_logo_path;

    }
    public function update($id)
    {
        $this->validate([
                'title' => 'required||min:6|max:50',
                'business_email' => 'required|business_email',
                'favicon' => 'required|min:6',
                'address' => 'required',
                'business_phone' => 'required',
                'address' => 'required',
                'description' => 'required',
                'working_horse' => 'required',
            ]);

        $setting = general_settings::findOrFail($id);
        $setting->title = $this->title;
        $setting->business_email = $this->business_email;
        $setting->favicon = bcrypt($this->favicon);
        $setting->address = $this->address;
        $setting->business_phone = $this->business_phone;
        $setting->address = $this->address;
        $setting->working_horse = $this->working_horse;
        $setting->description = $this->description;

        if ($this->logo) {
            $this->validate([
                'logo' => 'required|image|max:3072',
            ]);
            Storage::disk('public')->delete($setting->logo_path);
            // $setting->logo_path = $this->storeImage();

        }

        $setting->save();

        $this->title="";
        $this->business_email="";
        $this->favicon="";
        $this->favicon="";
        $this->address="";
        $this->business_phone="";
        $this->address="";
        $this->description="";
        $this->address="";
        $this->working_horse="";
        $this->logo="";
        $this->edit_logo="";

        session()->flash('message', 'setting Updated Successfully.');


}


    public function render()
    {
        // $general_settings =  DB::table('general_settings')->orderBy('id', 'DESC')->first();
        //  $this->c_logo  = $general_settings->logo_path;
        //  $this->c_favicon  = $general_settings->favicon_path;
        //  $this->working_horse  = $general_settings->working_horse;
        //  $this->title  = $general_settings->title;
        //  $this->description  = $general_settings->description;
        //  $this->address  = $general_settings->address;
        //  $this->business_email  = $general_settings->business_email;
        //  $this->business_phone  = $general_settings->business_phone;

        return view('livewire.admins.settings')->layout('admins.layouts.app');
    }
}
