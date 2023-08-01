<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin'], function () {

    Route::get('admin-panel', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin-login');
    Route::post('admin-panel', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin-login');

    Route::get('admin-dashboard',[\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');

    Route::get('forgot-password', [\App\Http\Controllers\Admin\LoginController::class, 'forgetPassword'])->name('admin-forget-password');
    Route::post('forgot-password', [\App\Http\Controllers\Admin\LoginController::class, 'forgetPassword'])->name('admin-forget-password');

    Route::get('logout', [\App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin-logout');

});
