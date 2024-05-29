<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/proteinas', function () {
    return view('proteinas');
});

Route::get('/aminoacidos', function () {
    return view('aminoacidos');
});

Route::get('/pre-treino', function () {
    return view('pre-treino');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/login', function () {
    return view('login');
});

//cotroller
use App\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class);
