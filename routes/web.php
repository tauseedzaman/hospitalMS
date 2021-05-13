<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BedsController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\BirthreportController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocterController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GeneralSettingsController;
use App\Http\Controllers\MedicinController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\OperationreportController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RoomsController;
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

// Route::middleware(['auth','checksuperadmin'])->group(function () {
    Route::get('/admins/',[AdminController::class,'index'])->name("admins");
    Route::post('/admins/login',[AdminController::class,'authenticate_admin'])->name("admin_login");
    Route::get('/admin/settings', [GeneralSettingsController::class,'index'])->name('admin_settings');
    Route::get('/admin/nurses',[NurseController::class,'index'])->name('nurses');
    Route::get('/admin/docters',[DocterController::class,'index'])->name('admin_docters');
// });

//admins operations

Route::get('/admin/operationsreport',[OperationreportController::class,'index'])->name('admin_operations_report');

Route::get('/admin/patients',[PatientController::class,'index'])->name('admin_patients');

Route::get('/admin/birthsreport',[BirthreportController::class,'index'])->name('admin_birth_report');

Route::get('/admin/patientBills',[BillController::class,'index'])->name('patient_bills');

Route::view('admins/test','test');

Route::get('/admin/rooms',[RoomsController::class,'index'])->name('Rooms');

Route::get('/admin/beds',[BedsController::class,'index'])->name('patients_beds');

Route::get('/admin/medicinesStore', [MedicinController::class,'index'])->name('medicinesStore');


Route::get('/admin/departments',[DepartmentController::class,'index'])->name('departments');

Route::get('/admin/employees',[EmployeeController::class,'index'])->name('employees');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

