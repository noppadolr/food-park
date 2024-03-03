<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('admin.dashboard.master');
// });




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Route::middleware(['auth','role:admin'])->group(function () {
//     Route::controller(AdminDashboardController::class)->group(function(){
//         Route::get('admin/dashboard','index')
//             ->name('admin.dasboard');

//     });
// });






