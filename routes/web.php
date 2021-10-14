<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\doctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get("/docters",[doctorController::class,'index']);

Route::get('/app', function () {
    return view('layouts.app');
});

Route::view('/services', 'services');

// Route::get('/admin',[AdminController::class,'index'])->name("admins");

// Route::post('/admin/login',[AdminController::class,'authenticate_admin'])->name("admin_login");

Route::middleware(['auth','checksuperadmin'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('settings',App\Http\Livewire\Admins\Settings::class)->name('admin_settings');
        Route::get('/doctors',App\Http\Livewire\Admins\Docter::class)->name('admin_docters');
        Route::get('/operationsreport',App\Http\Livewire\Admins\operationreport::class)->name('admin_operations_report');
        Route::get('/patients',App\Http\Livewire\Admins\Patients::class)->name('admin_patients');
        Route::get('/birthsreport',App\Http\Livewire\Admins\birthreport::class)->name('admin_birth_report');
        Route::get('/patientBills',App\Http\Livewire\Admins\Bills::class)->name('patient_bills');
        Route::get('/medicinesStore',App\Http\Livewire\Admins\Medicinestore::class)->name('medicinesStore');
        Route::get('/employees',App\Http\Livewire\Admins\employees::class)->name('employees');
        Route::get('/appointment',App\Http\Livewire\Admins\Appiontment::class)->name('appointment');
        Route::get('/admin/requestedappointments',App\Http\Livewire\Admins\requestedAppointments::class)->name('requestedAppointment');
        Route::get('/contactedus',App\Http\Livewire\Admins\Contactedus ::class)->name('contactedus');
    });
});






Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

