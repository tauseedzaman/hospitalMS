<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthreportController extends Controller
{
    public function index()
    {
        return view('admins.birthReport');
    }
}
