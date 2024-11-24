<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FeaturedCarsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Users Management
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit', [UserController::class, 'create'])->name('users.edit');
    Route::put('/users', [UserController::class, 'update'])->name('users.update');

    // Cars
    Route::get('/cars', [UserController::class, 'index'])->name('cars.index');
    Route::get('/cars/create', [UserController::class, 'create'])->name('cars.create');
    Route::post('/cars', [UserController::class, 'store'])->name('cars.store');
    Route::get('/cars/edit', [UserController::class, 'create'])->name('cars.edit');
    Route::put('/cars', [UserController::class, 'update'])->name('cars.update');

    // Settings
    Route::get('/settings', [UserController::class, 'index'])->name('settings.index');
    Route::get('/settings/edit', [UserController::class, 'create'])->name('settings.edit');
    Route::put('/settings', [UserController::class, 'update'])->name('settings.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/featured-cars', [FeaturedCarsController::class, 'index']);
Route::get('/contact-us', [ContactUsController::class, 'index']);

require __DIR__ . '/auth.php';
