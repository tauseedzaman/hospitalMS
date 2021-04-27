<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocterController extends Controller
{
    public function index()
    {
        return view("admins.docters");
    }
}
