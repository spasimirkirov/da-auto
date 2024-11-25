<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
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
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.delete');

    // Update User's password
    Route::get('/users/{id}/password', [UserController::class, 'editPassword'])->name('users.editPassword');
    Route::put('/users/{id}/password', [UserController::class, 'updatePassword'])->name('users.updatePassword');

    // Cars
    Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
    Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
    Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');
    Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('/cars/{id}', [CarController::class, 'delete'])->name('cars.delete');

    // Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::get('/settings/edit', [SettingsController::class, 'create'])->name('settings.edit');
    Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/featured-cars', [FeaturedCarsController::class, 'index']);
Route::get('/contact-us', [ContactUsController::class, 'index']);

require __DIR__ . '/auth.php';
