<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InveytController;
use App\Http\Controllers\SigninController;




Route::get('/', [InveytController::class, 'index']);

Route::get('/Login', [SigninController::class, 'sigin']);

Route::get('/perfil', function () {
    return "Bienvenido al perfil ";
    //return view('welcome');
});
