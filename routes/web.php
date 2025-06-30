<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/inicio', function () {
    return view('inicio');
});
Se sustituye por el controlador SumaController para que se pueda usar el metodo index de la clase SumaController

*/

Route::get('/inicio', [SumaController::class, 'index']);
Route::post('/inicio', [SumaController::class, 'suma']);
Route::get('/template', [SumaController::class, 'template']);

Route::get('/productos', [ProductoController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/loginDos', [LoginController::class, 'login']);
Route::get('/loginTres', [LoginController::class, 'loginImg']);

Route::get('/curso', [SumaController::class, 'tailwind']);

Route::get('/svg', [SumaController::class, 'svgConvert']);

