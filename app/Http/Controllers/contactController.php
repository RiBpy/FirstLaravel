<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    //index method
    public function index()
    {
        return view("/contact");
    }
}
