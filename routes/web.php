<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth','user'])->group(function (){
    Route::get('user', function (){
        return "This is the user page";
    })->name('user');
});

Route::middleware(['auth','admin'])->group(function (){
    Route::get('admin', function (){
        return "This is the admin page";
    })->name('admin');

});


