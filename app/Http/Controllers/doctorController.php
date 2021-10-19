<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
class doctorController extends Controller
{
    public function index()
    {
        return view("doctor",['doctors' => doctor::latest()->get()]);
    }
}
