<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InveytController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;


Route::get('/', [InveytController::class, 'index']);

Route::get('/Singin', [SigninController::class, 'sigin']);
Route::get('/Login', [LoginController::class, 'login']);
Route::get('/Productos', [ProductosController::class, 'productos']);


Route::get('/perfil', function () {
    return "Bienvenido al perfil ";
    //return view('welcome');
});
