<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Bienvenido a la beta ";
    //return view('welcome');
});

Route::get('/perfil', function () {
    return "Bienvenido al perfil ";
    //return view('welcome');
});
