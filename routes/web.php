<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InveytController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\LoginController;



Route::get('/', [InveytController::class, 'index']);

Route::get('/Singin', [SigninController::class, 'sigin']);
Route::get('/Login', [LoginController::class, 'login']);

Route::get('/perfil', function () {
    return "Bienvenido al perfil ";
    //return view('welcome');
});
