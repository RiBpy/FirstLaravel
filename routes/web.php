<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

     return view('welcome');
});

Route::get('/country', function(){
 return view("country");
})->middleware("country");

//controller_laravel_8
Route::get('/contact',[contactController::class,"index"])->name('contact.us'); //here "index" can be anything ..but good practice is using index while going any page.when submitting form "post" when editing form "edit" when deleting data "destroy" .
Route::view('/about','about'); //without calling a function
Route::get(md5('/contact'), function () {
             return view('contact');
        })->name("contact.us");  //if name route is being used the /contact can be anything...like- abbbbcddala this value will go with then route..

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

