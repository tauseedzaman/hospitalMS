<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admins.dashboard',[
            'employees'=>\App\Models\Employee::count(),
            'appointments'=>\App\Models\appointment::count(),
            'birthreports'=>\App\Models\birthreport::count(),
            'operationreports'=>\App\Models\operationreport::count(),
            'patients'=>\App\Models\patient::count(),
            'hods'=>\App\Models\hod::count(),
            'blocks'=>\App\Models\block::count(),
            'departments'=>\App\Models\department::count(),
            'rooms'=>\App\Models\rooms::count(),
            'beds'=>\App\Models\beds::count(),
            'subscribers'=>\App\Models\subscriber::count(),
            'requestedAppointment'=>\App\Models\requestedAppointment::count(),
        ])->layout('admins.layouts.app');
    }
}
