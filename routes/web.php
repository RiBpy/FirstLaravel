<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;

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
Route::get('/about',[contactController::class,"about"])->name('about.us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

