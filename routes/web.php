<?php

use App\Http\Controllers\FarmController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FarmController::class, 'home'])->name('farm.home');
Route::get('/operacao', [FarmController::class, 'operation'])->name('farm.operation');
Route::get('/cuidados', [FarmController::class, 'care'])->name('farm.care');

Route::fallback([FarmController::class, 'fallback'])->name('farm.fallback');
