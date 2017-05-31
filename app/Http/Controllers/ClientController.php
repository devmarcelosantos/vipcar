<?php

namespace App\Http\Controllers;
use DB;
use \App\Client;
use Illuminate\Http\Request;
use App\Http\Requests;


class ClientController extends Controller
{
    private $client;

  public function __construct(Client $client)
  {
    $this->clients = $client;
    $this->client = $client;

    $this->middleware('auth');
  }
  //---------------- Listar cliente Específico -----------------//
  public function get_list_client()
  {
    return view('client/list_client');
  }

  public function post_list_client(Request $field)
  {
    $clients = $this->client->getClient($field);
    return view('client/list_client', compact('clients'));
  }
  //------------------------------------------------------------//

  //--------------------- Listar clientes ----------------------//
  public function list_clients()
  {                       
    $clients = $this->clients->getClients();
    return view('client/list_client', compact('clients'));
  }
  //------------------------------------------------------------//
  
  //-------------------- Adicionar Clientes --------------------//
  public function get_add_client()
  {
    return view('client/add_client');
  }

  public function post_add_client(Request $info)
  {
    $client = $this->client->addClient($info);
    return redirect()->route('client.list');
  }
  //------------------------------------------------------------//

 //-------------------- Editar Clientes --------------------//
    public function get_edit_edit($id)
  {
    $client = $this->client->find($id);
    return view('client/edit_clientt', compact('client'));
  }

  public function post_edit_client(Request $info, $id)
  {
    $client = $this->client->find($id);
    $client->name = $field['name'];
    $client->cpf = $field['cpf'];
    $client->email = $field['email'];
    $client->address = $field['address'];
    $client->phone = $field['phone'];
    $client->birth_date = $field['birth_date'];
    $client->save();
    return redirect()->route('client.list');
  }
  //------------------------------------------------------------//

  
}

