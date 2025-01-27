<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('principal');  // Esto cargará la vista home.blade.php
    }
}