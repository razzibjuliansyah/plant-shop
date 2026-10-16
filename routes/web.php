<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;

Route::get('/', [PlantController::class, 'home'])->name('home');
Route::get('/about', [PlantController::class, 'about'])->name('about');
Route::get('/plants', [PlantController::class, 'index'])->name('plants.index');
Route::get('/plants/{id}', [PlantController::class, 'show'])->name('plants.show');
Route::get('/contact', [PlantController::class, 'contact'])->name('contact');