<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('template');
});

/* Route::get('/panel', function () {
    return view('panel.index')->name('panel');
}); */

Route::view('/panel', 'panel.index')->name('panel');

/* Route::view('/categorias', 'categoria.index'); */

Route::resource('categorias',categoriaController::class);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/401', function () {
    return view('pages.401');
});

Route::get('/404', function () {
    return view('pages.404');
});

Route::get('/500', function () {
    return view('pages.500');
});