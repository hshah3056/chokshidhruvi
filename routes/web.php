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

//Route::get('/', function () {
//    return view('website.home');
//});

Route::group(['namespace' => 'Website'], function () {
    Route::get('/', [\App\Http\Controllers\Website\HomeController::class, 'index'])->name('website-home');
    Route::get('about', [\App\Http\Controllers\Website\HomeController::class, 'about'])->name('website-about');
    Route::get('our-packages', [\App\Http\Controllers\Website\HomeController::class, 'ourPackages'])->name('website-packages');
    Route::get('contact', [\App\Http\Controllers\Website\HomeController::class, 'contact'])->name('website-contact');
});
