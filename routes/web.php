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


Auth::routes();

// ROTAS PARA A CONTROLLER HOME - MÉTODO INDEX
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


// ROTAS PARA DESLOGAR E ENVIAR PARA VIEW DE LOGIN
Route::get('/logout', 'Auth\LoginController@logout');