<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {   
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/registro', function () {
    return view('IntroData.registro');
});
