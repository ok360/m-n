<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        $names = [];
        return view('admin',compact ('names'));
    }
    public function login()
    {
        return view ('login');
    }
}
