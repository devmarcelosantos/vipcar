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
    return list_clients();
  }

  public function post_list_client(Request $field)
  {
    if(is_null($field['name']) && is_null($field['cpf'])) {
      $clients = $this->clients->getClients();
    } else {
      $clients = $this->client->getClient($field);
    }
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
    return redirect()->route('clients');
  }
  //------------------------------------------------------------//
  //-------------------- Editar Clientes --------------------//
    public function get_edit_client($id)
  {
    $client = $this->client->find($id);
    return view('client/edit_client', compact('client'));
  }

  public function post_edit_client(Request $info, $id)
  {
    $client = $this->client->find($id);
    $client->name = $info['name'];
    $client->cpf = $info['cpf'];
    $client->email = $info['email'];
    $client->address = $info['address'];
    $client->phone = $info['phone'];
    $client->birth_date = $info['birth_date'];
    $client->save();
    return redirect()->route('clients');
  }
  //------------------------------------------------------------//
}

