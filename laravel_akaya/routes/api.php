<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

  Route::group(['prefix' => 'kaya'], function () {

    // Rooms
    // Get All Rooms -> path /post/rooms
    // Get Room by Id -> path /post/room/:id
    // Get Comment Room -> /post/room/:id/comments
    // Get Antigos Moradores -> path /post/room/:id/lived/users

      // Get All Rooms
      Route::get('/post/rooms', 'RoomsController@index');
      // Get Room by ID
      Route::get('/post/rooms/{id}', 'RoomsController@index');
      // Get Room Comments
      //Route::get('/post/rooms/{id}/comentarios', 'RoomsController@index');
      // Get Antidos Moradores
      //Route::get('/post/rooms/{id}/lived/user/{id_user}', 'RoomsController@index');


    // Get Todas Provincias -> path /data/provincias/
    // Get Provincia by ID -> path /data/provincia/{id}
    // Get Distritos-Provincia -> path /data/provincia/distritos
    // Get Distritos-Provincia by ID -> path /data/provincia/distrito/{id}

    Route::get('/data/provincias', 'ProvinciaController@index');
    Route::get('/data/provincias/{id}', 'ProvinciaController@show');
    Route::post('/data/provincias', 'ProvinciaController@store');
    Route::delete('/data/provincias/{id}', 'ProvinciaController@destroy');
    Route::put('/data/provincias/{id}', 'ProvinciaController@update');

    // Todos Distritos -> path /data/distrito
    Route::get('/data/distritos', 'DistritoController@index');
    Route::get('/data/distritos/{id}', 'DistritoController@show');
    Route::post('/data/distritos', 'DistritoController@store');
    Route::delete('/data/distritos/{id}', 'DistritoController@destroy');
    Route::put('/data/distritos/{id}', 'DistritoController@update');

    // Todas Universidades -> path /data/distrito
    Route::get('/data/universidades', 'UniversidadesController@index');
    Route::get('/data/universidades/{id}', 'UniversidadesController@show');
    Route::post('/data/universidades', 'UniversidadesController@store');
    Route::delete('/data/universidades/{id}', 'UniversidadesController@destroy');
    Route::put('/data/universidades/{id}', 'UniversidadesController@update');

  });
