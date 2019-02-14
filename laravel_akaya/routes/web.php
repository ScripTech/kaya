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

Route::get('/login/account/{service}', 'SocialAuthGoogleController@redirect');
Route::get('/callback/{service}', 'SocialAuthGoogleController@callback');

Route::get('/', function () {
    return view('index');
});

//Route::get('/educar/{any}', 'SinglePageController@index')->where('any', '.*')->middleware('auth');;
Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');

//Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
