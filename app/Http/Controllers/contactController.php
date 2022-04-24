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
        $data["name"]=$request->name;
        $validated = $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|max:55',
            'password' => 'required|min:6|max:15',
        ]);
        \Log::channel('aboutStore')->info("Submitted By:" .$data["name"]);
        return redirect()->back();

    }
    public function contactStore(Request $request)
    {
        //  dd($request->email);
        // dd($request ->ip());
       // dd($request ->collect());
       $data=array();
       $data["name"]=$request->name;
       $data["email"]=$request->email;
       //return redirect()->back()->with('success', 'Data Inserted!');
       return redirect("/contact")->with('success', 'Data Inserted!');
       //return $data;
    //    return redirect()->action([secondController::class,'red']);


    }
    public function countryController()
    {
        return view("/country");
    }
}
