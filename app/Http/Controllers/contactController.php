<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\secondController;

class contactController extends Controller
{
    //index method
    public function index()
    {
        return view("/contact");
    }
    //about method
    public function about()
    {
        return view("/about");
    }
    // aboutStore method used for accessing form data..
    public function aboutStore(Request $request)
    {
         dd($request->all());
    }
    public function contactStore(Request $request)
    {
        //  dd($request->email);
        // dd($request ->ip());
    // dd($request->header('X-Header-Name'));
       // dd($request ->collect());
       $data=array();
       $data["name"]=$request->name;
       $data["email"]=$request->email;
       return redirect()->action([secondController::class,'red']);


    }
    public function countryController()
    {
        return view("/country");
    }
}
