<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Auth::routes(['verify' => true]);


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

// Route::get('guarderbase', [Controller::class, 'guarderbase'])->name('guarder');

// Route::get('guarderabout', [Controller::class, 'guarderabout'])->name('about');

// Route::get('guarderservice', [Controller::class, 'guarderservice'])->name('services');

// Route::get('guarderguards', [Controller::class, 'guarderguards'])->name('guards');

// Route::get('guardercontact', [Controller::class, 'guardercontact'])->name('contact');

////////////////////////////////////////////////////////////////////////////////////////
//Task11


// Auth::routes();

//Task 14

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('guarderbase', [Controller::class, 'guarderbase'])->middleware('verified')->name('guarder');

Route::get('guarderabout', [Controller::class, 'guarderabout'])->middleware('verified')->name('about');

Route::get('guarderservice', [Controller::class, 'guarderservice'])->middleware('verified')->name('services');

Route::get('guarderguards', [Controller::class, 'guarderguards'])->middleware('verified')->name('guards');

Route::get('guardercontact', [Controller::class, 'guardercontact'])->middleware('verified')->name('contact');
    }
);