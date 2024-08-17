<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', [CarController::class, 'index'])->name('index');
Route::get('/create', [CarController::class, 'create'])->name('create');
Route::post('/store', [CarController::class, 'store'])->name('store');
Route::get('/edit/{id}', [CarController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [CarController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [CarController::class, 'destroy'])->name('destroy');
Route::resource('cars', CarController::class);