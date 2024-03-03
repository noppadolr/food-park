<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;

// Route::middleware(['auth','role:admin'])->group(function () {

    Route::middleware(['auth','role:admin'])->group(function () {
        Route::controller(AdminDashboardController::class)->group(function(){
            Route::get('admin/dashboard','index')
                ->name('admin.dasboard');
    
        });
    });