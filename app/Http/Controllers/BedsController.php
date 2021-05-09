<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BedsController extends Controller
{
    public function index()
    {
        return view('admins.beds');
    }
}
