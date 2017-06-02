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

// ROTAS PARA DESLOGAR E ENVIAR PARA VIEW DE LOGIN
Route::get('/logout', 'Auth\LoginController@logout');

// ROTAS PARA A CONTROLLER HOME - METODO INDEX
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//================================== ROTAS PARA CLIENTE ==================================//
// ROTAS PARA ADICIONAR CLIENTES
Route::get('/client/add', 'ClientController@get_add_client')->name('client.add'); // Rota da view
Route::post('/client/add', 'ClientController@post_add_client')->name('client.postAdd'); // Rota do formulário

// ROTAS PARA LISTAR CLIENTES
Route::get('/client', function() { return redirect()->route('clients'); });
Route::post('/client', 'ClientController@post_list_client')->name('client.list');
Route::get('/clients', 'ClientController@list_clients')->name('clients');

// ROTAS PARA EDITAR CLIENTE NO BANCO DE DADOS
Route::get('/client/edit/{id}', 'ClientController@get_edit_client')->name('client.edit');
Route::post('/client/edit/{id}', 'ClientController@post_edit_client')->name('client.postEdit');
Route::get('/client/delete/{id}', 'ClientController@delete_client')->name('client.delete');

//========================================================================================//

//================================== ROTAS PARA VEÍCULO ==================================//
// ROTAS PARA ACICIONAR VEICULO
Route::get('/vehicle/add', 'VehicleController@get_add_vehicle')->name('vehicle.add'); // Rota da view
Route::post('/vehicle/add', 'VehicleController@post_add_vehicle')->name('vehicle.postAdd'); // Rota do formulário

// ROTAS PARA LISTAR VEICULO
//Route::get('/clients', 'ClientController@list_clients')->name('clients');

// ROTAS PARA EDITAR VEICULO

// ROTAS PARA DELETAR VEICULO

//========================================================================================//
