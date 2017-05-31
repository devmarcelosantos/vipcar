<?php

namespace VipCar\Http\Controllers;
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
  
  //-------------------- Adicionar Produtos --------------------//
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
}
