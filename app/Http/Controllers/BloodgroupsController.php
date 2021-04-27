<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodgroupsController extends Controller
{
    public function index()
    {
        return view('admins.bloodgroups');
    }
}
