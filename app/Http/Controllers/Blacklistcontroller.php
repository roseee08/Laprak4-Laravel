<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blacklistcontroller extends Controller
{
    public function index()
    {
        return view('Blacklist');
    }
}
