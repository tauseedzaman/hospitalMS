<?php

namespace App\Http\Livewire\Admins;

use App\Models\settings as SettingModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public $settings;
    public $logo;
    public $icon;

    public function mount()
    {
        $this->settings = SettingModel::all()->pluck('value', 'key')->toArray();
    }

    public function updateSettings()
    {
        foreach ($this->settings as $key => $value) {
            $setting = SettingModel::where('key', $key)->first();
            if ($setting) {
                if ($this->isFileSetting($key)) {
                    $this->updateFileSetting($setting, $key);
                } else {
                    $setting->update(['value' => $value]);
                }
            }
        }
        session()->flash('message', 'Settings updated successfully.');
        return redirect()->route("admin_settings");
    }

    private function isFileSetting($key)
    {
        return in_array($key, ['logo', 'icon']);
    }

    private function updateFileSetting($setting, $key)
    {
        if ($this->{$key}) {
            $this->validate([
                $key => 'image|mimes:jpg,png,jpeg|max:2048',
            ]);

            $imagePath = $this->{$key}->store('uploads','public');
            $setting->update(['value' => $imagePath]);
        }
    }

    public function render()
    {
        return view('livewire.admins.settings')->layout('admins.layouts.app');
    }
}
