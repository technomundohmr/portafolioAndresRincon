<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\proyectos;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController::class, 'home'])->name('index');
Route::get('/en', [HomeController::class, 'homeEn']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'home']);

Route::resource('proyectos', proyectos::class);

Route::post('/contacto', [HomeController::class, 'contacto']);
Route::post('/login', [LoginController::class, 'auth']);