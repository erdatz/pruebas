<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CajeroController;

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Rutas de panel de administración y cajero
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/cajero', [CajeroController::class, 'index'])->name('cajero.index');
