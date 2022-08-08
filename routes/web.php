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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('auth.register');
});
/* Route::get('/vocacional', function () {
    return view('vocacional');
}); */
Route::get('/vocacional', function(){
    View::addExtension('html','php');
    return View::make('welcome2');
});


/* Route::view('/welcome2', 'welcome2'); */
/* Route::get('/vocacional', 'test'); */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');