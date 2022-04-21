<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invokController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return "<h1>This is Invoke Method</h1>";
    }
    public function hello()
    {
        return "<h1>This is helloInvoke Method</h1>";
    }
}
