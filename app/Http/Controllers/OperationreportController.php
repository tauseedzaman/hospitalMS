<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationreportController extends Controller
{
    public function index()
    {
        return view('admins.operationsReport');
    }
}
