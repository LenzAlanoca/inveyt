<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InveytController;



Route::get('/', [InveytController::class, 'index']);

Route::get('/perfil', function () {
    return "Bienvenido al perfil ";
    //return view('welcome');
});
