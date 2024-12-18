<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnlineCatalogueController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    // Users Management
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('admin.users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{id}', [UserController::class, 'delete'])->name('admin.users.delete');

    // Update User's password
    Route::get('/users/{id}/password', [UserController::class, 'editPassword'])->name('admin.users.editPassword');
    Route::put('/users/{id}/password', [UserController::class, 'updatePassword'])->name('admin.users.updatePassword');

    // Cars
    Route::redirect('/cars/{id}', '/admin/cars/{id}/details', 302);

    Route::get('/cars', [CarController::class, 'index'])->name('admin.cars.index');
    Route::get('/cars/create', [CarController::class, 'create'])->name('admin.cars.create');
    Route::post('/cars', [CarController::class, 'store'])->name('admin.cars.store');
    Route::get('/cars/{id}/details', [CarController::class, 'show'])->name('admin.cars.show');
    Route::get('/cars/{id}/details/edit', [CarController::class, 'edit'])->name('admin.cars.edit');
    Route::get('/cars/{id}/images', [CarController::class, 'images'])->name('admin.cars.images');
    Route::put('/cars/{id}', [CarController::class, 'update'])->name('admin.cars.update');
    Route::delete('/cars/{id}', [CarController::class, 'delete'])->name('admin.cars.delete');

    Route::post('/cars/{id}/upload', [CarController::class, 'handleUpload'])->name('admin.cars.handleUpload');
    Route::delete('/cars/{id}/removeImage/{imageId}', [CarController::class, 'handleRemove'])->name('admin.cars.handleRemove');

    // Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings.index');
    Route::get('/settings/edit', [SettingsController::class, 'edit'])->name('admin.settings.edit');
    Route::put('/settings', [SettingsController::class, 'update'])->name('admin.settings.update');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/online-catalogue', [OnlineCatalogueController::class, 'index']);
Route::get('/contact-us', [ContactUsController::class, 'index']);

require __DIR__ . '/auth.php';
