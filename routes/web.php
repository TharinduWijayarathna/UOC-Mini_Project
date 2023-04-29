<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('dashboard');


Route::prefix('admin')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('admin.dashboard.index');
    });
    Route::prefix('user_management')->group(function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('admin.user_management.index');
    });
});

require __DIR__ . '/auth.php';
