<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InveytController;
use App\Http\Controllers\LoginController;




Route::get('/', [InveytController::class, 'index']);

Route::get('/Login', [LoginController::class, 'login']);

Route::get('/perfil', function () {
    return "Bienvenido al perfil ";
    //return view('welcome');
});
