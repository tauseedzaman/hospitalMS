<?php

use App\Http\Controllers\AdminController;
// use App\Http\Controllers\BedsController;
// use App\Http\Controllers\BillController;
// use App\Http\Controllers\BirthreportController;
// use App\Http\Controllers\DepartmentController;
// use App\Http\Controllers\DocterController;
// use App\Http\Controllers\EmployeeController;
// use App\Http\Controllers\GeneralSettingsController;
// use App\Http\Controllers\MedicinController;
// use App\Http\Controllers\NurseController;
// use App\Http\Controllers\OperationreportController;
// use App\Http\Controllers\PatientController;
// use App\Http\Controllers\RoomsController;
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
Route::get("/docters",function ()
{
    return view('docter');
});
Route::get('/app', function () {
    return view('layouts.app');
});
Route::get('/admin/',[AdminController::class,'index'])->name("admins");

Route::post('/admin/login',[AdminController::class,'authenticate_admin'])->name("admin_login");

// Route::middleware(['auth','checksuperadmin'])->group(function () {

    Route::get('/admin/settings',\App\Http\Livewire\Admins\Settings::class)->name('admin_settings');

    Route::get('/admin/nurses',\App\Http\Livewire\Admins\Nurses::class)->name('nurses');

    Route::get('/admin/docters',\App\Http\Livewire\Admins\Docter::class)->name('admin_docters');

    Route::get('/admin/operationsreport',\App\Http\Livewire\Admins\operationreport::class)->name('admin_operations_report');

    Route::get('/admin/patients',\App\Http\Livewire\Admins\Patients::class)->name('admin_patients');

    Route::get('/admin/birthsreport',\App\Http\Livewire\Admins\birthreport::class)->name('admin_birth_report');

    Route::get('/admin/patientBills',\App\Http\Livewire\Admins\Bills::class)->name('patient_bills');

    Route::view('admins/test','test');

    Route::get('/admin/rooms',\App\Http\Livewire\Admins\Rooms::class)->name('Rooms');

    Route::get('/admin/beds',\App\Http\Livewire\Admins\Beds::class)->name('patients_beds');

    Route::get('/admin/medicinesStore',\App\Http\Livewire\Admins\Medicinestore::class)->name('medicinesStore');


    Route::get('/admin/departments',\App\Http\Livewire\Admins\departments::class)->name('departments');

    Route::get('/admin/employees',\App\Http\Livewire\Admins\employees::class)->name('employees');


// });






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

