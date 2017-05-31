<?php
namespace VipCar;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $fillable = ['name'];

  public function getClient($field)
  {
    if(is_null($field['id']) && is_null($field['name']))
    {
    } elseif ($field['id'] > '0') {
      $client = \App\Client::where('id', $field['id'])->get();
    } else {
      $client = \App\Client::where('name', $field['name'])->get();
    }
    return $client;
  }

  public function getClients()
  {
    $clients = \App\Client::all();
    return $clients;
  }

  public function addClient($field)
  {
    $client = new Client();
    $client->name = $field['name'];
    $client->cpf = $field['cpf'];
    $client->email = $field['email'];
    $client->address = $field['address'];
    $client->phone = $field['phone'];
    $client->birth_date = $field['birth_date'];
    $client->save();
  }
}
