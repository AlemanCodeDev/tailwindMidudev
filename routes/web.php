<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::post('/inicio', function () {
    $numero1 = request('numero1');
    $numero2 = request('numero2');
    $resultado = $numero1 + $numero2;
    return view('inicio', ['resultado' => $resultado]);
});
