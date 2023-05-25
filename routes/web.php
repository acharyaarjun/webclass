<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

// first tarika
// Route::get('/', [App\Http\Controllers\SiteController::class, 'getHome']);

// second tarika
// Route::get('/', 'App\Http\Controllers\SiteController@getHome');

// most used tarika
Route::get('/', [SiteController::class, 'getHome']);


// name vanko route ho
// ::class , 'getHOme' vaneko sitecontroller vitra ko funcion ho
Route::get('/about', [SiteController::class, 'getAbout'])->name('getAboutKoRoute');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
