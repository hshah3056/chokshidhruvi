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

    Route::get('blog-list', [\App\Http\Controllers\Website\BlogController::class, 'index'])->name('website-blog-list');
    Route::get('blog-details', [\App\Http\Controllers\Website\BlogController::class, 'details'])->name('website-blog-detail');

    Route::get('success-story', [\App\Http\Controllers\Website\StoryController::class, 'index'])->name('website-story');

    Route::get('contact', [\App\Http\Controllers\Website\ContactController::class, 'index'])->name('website-contact');
    Route::post('contact', [\App\Http\Controllers\Website\ContactController::class, 'index'])->name('website-contact');
});
