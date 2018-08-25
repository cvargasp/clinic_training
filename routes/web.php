<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

Route::get('/empresas', function () {
    return view('empresas');
})->name('empresas');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');