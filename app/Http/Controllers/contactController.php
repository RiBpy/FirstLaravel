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
    public function about()
    {
        return view("/about");
    }
    public function aboutStore(Request $request)
    {
         dd($request->all());
    }
    public function contactStore(Request $request)
    {
         dd($request->all());
    }
    public function countryController()
    {
        return view("/country");
    }
}
