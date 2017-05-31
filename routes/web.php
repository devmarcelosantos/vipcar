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

// ROTAS PARA ADICIONAR O CLIENTE NO BANCO DE DADOS
Route::get('/client/add', 'ClientController@get_add_client');
Route::post('/client/add', 'ClientController@post_add_client');

// ROTAS PARA ADICIONAR O VEICULO NO BANCO DE DADOS
Route::get('/vehicle/add', 'VehicleController@get_add_vehicle');
Route::post('/vehicle/add', 'VehicleController@post_add_vehicle');

//ROTAS PARA LISTAR PRODUTOS
Route::get('/client', ['uses' => 'ClientController@get_list_client', 'as' => 'client.listPage']);
Route::post('/client', ['uses' => 'clientController@post_list_client', 'as' => 'client.list']);
Route::get('/clients', ['uses' => 'clientController@list_clients', 'as' => 'clients.list']);

// ROTAS PARA EDITAR CLIENTE NO BANCO DE DADOS
Route::get('/client/edit/{id}', ['uses' => 'ClientController@get_edit_client', 'as' => 'client.editPage']);
Route::post('/client/edit/{id}', ['uses' => 'ClientController@post_edit_client', 'as' => 'client.edit']);
Route::get('/client/delete/{id}', ['uses' => 'ClientController@delete_client', 'as' => 'client.delete']);

// ROTAS PARA DESLOGAR E ENVIAR PARA VIEW DE LOGIN
Route::get('/logout', 'Auth\LoginController@logout');