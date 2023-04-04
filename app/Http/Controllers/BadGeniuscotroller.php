<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BadGeniuscotroller extends Controller
{
    public function index()
    {
        return view('BadGenius');
    }
}
