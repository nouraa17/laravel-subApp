<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

////////////////////////////////////////////////////////////////////////////////
// Task8
Route::get('/guarderbase',function(){
    return view('guarder');
})->name('guarder');

Route::get('/guarderabout',function(){
    return view('about');
})->name('about');

Route::get('/guarderservice',function(){
    return view('services');
})->name('services');

Route::get('/guarderguards',function(){
    return view('guards');
})->name('guards');

Route::get('/guardercontact',function(){
    return view('contact');
})->name('contact');