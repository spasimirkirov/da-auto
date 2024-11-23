<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FeaturedCarsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/featured-cars', [FeaturedCarsController::class, 'index']);
Route::get('/contact-us', [ContactUsController::class, 'index']);
