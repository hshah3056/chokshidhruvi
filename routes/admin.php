<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin'], function () {

    Route::get('login', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin-login');
    Route::post('login', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin-login');

    Route::get('forgot-password', [\App\Http\Controllers\Admin\LoginController::class, 'forgetPassword'])->name('admin-forget-password');
    Route::post('forgot-password', [\App\Http\Controllers\Admin\LoginController::class, 'forgetPassword'])->name('admin-forget-password');

});
