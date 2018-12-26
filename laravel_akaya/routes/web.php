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
    return view('rooms');
});

Route::get('/room/id', function () {
    return view('room');
});


Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/editar/perfil', function () {
    return view('welcome');
});


