<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;

Route::group(['namespace' => 'Admin'], function () {

    Route::get('admin-panel', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin-login');
    Route::post('admin-panel', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin-login');

    Route::group(['middleware' => 'admin.auth'], function () {
            Route::get('admin-dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

            Route::get('resources', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contact-data');

            Route::get('forgot-password', [\App\Http\Controllers\Admin\LoginController::class, 'forgetPassword'])->name('admin-forget-password');
            Route::post('forgot-password', [\App\Http\Controllers\Admin\LoginController::class, 'forgetPassword'])->name('admin-forget-password');

        //clients
        Route::get('client-lists', [\App\Http\Controllers\Admin\ClientController::class, 'index'])->name('admin-client-list');
        Route::get('client-create', [\App\Http\Controllers\Admin\ClientController::class, 'create'])->name('admin-client-create');
        Route::post('client-store-data', [\App\Http\Controllers\Admin\ClientController::class, 'store'])->name('admin-client-store');
        Route::get('client-lists-edit/{id}', [\App\Http\Controllers\Admin\ClientController::class, 'edit'])->name('admin-client-data-edit');
        Route::post('client-lists-update/{id}', [\App\Http\Controllers\Admin\ClientController::class, 'update'])->name('admin-client-update');


//        blogs
        Route::get('blog-data-list/edit/{id}', [BlogController::class, 'edit'])->name('admin-blog-edit');
//        Route::get('blog-create', [BlogController::class, 'create'])->name('admin-blog-create');
//        Route::get('blog-destroy', [BlogController::class, 'destroy'])->name('admin-blog-destroy');

        Route::get('logout', [\App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin-logout');
    });
});

Route::resource('blog-data-list', BlogController::class);
