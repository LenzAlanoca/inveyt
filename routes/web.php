<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InveytController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\AcercadeController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', [InveytController::class, 'index']);

Route::get('/Singin', [SigninController::class, 'sigin']);
Route::get('/Login', [LoginController::class, 'login']);
Route::get('/Productos', [ProductosController::class, 'productos']);
Route::get('/Acercade', [AcercadeController::class, 'acercade']);
Route::get('/Profile', [ProfileController::class, 'profile']);

Route::get('/perfil', function () {
    return "Bienvenido al perfil ";
    //return view('welcome');
});
