<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {  
    $data =array();
       $data ["a"]=100;
       $data ["b"]=200;
       $data ["c"]=300;
       view()->share("number",$data);

    }
}
