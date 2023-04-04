<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Webdramacontroller extends Controller
{
    public function index()
    {
        return view('Webdrama');
    }
}
