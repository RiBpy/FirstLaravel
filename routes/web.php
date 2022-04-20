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
//   Cache::put("variable","Value Of The variable");
//   dd(cache()->get("variable"));
     return view('welcome');
});
// Route::match(['get','post'],'/about', function () {  //same as get method
//          return view('about');
//     });
Route::get('/country', function(){
 return view("country");
})->middleware("country");

Route::view('/about','about'); //without calling a function
Route::get(md5('/contact'), function () {
             return view('contact');
        })->name("contact.us");  //if name route is being used the /contact can be anything...like- abbbbcddala this value will go with then route..
// Route::get('/test-one', function () {
//     app()->make('first_service');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

