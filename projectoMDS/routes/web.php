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
    return view('welcome');
});

Route::get('/Admin', function () {
    return view('admin');
});

Route::get('/Profissional', function () {
    return view('profissional');
});

Route::get('/Utente', function () {
    return view('utente');
});

Route::get('/denuncia', function () {
    return view('denuncia');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
