<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Vehicle;

class Vehicle extends Model
{
  protected $fillable = ['name', 'cpf'];

  public function getClient($field)
  {
    if(!is_null($field['name']) || !is_null($field['cpf'])) {
      $client = Client::where('name', 'LIKE', '%'.$field['name'].'%')
                         ->orWhere('cpf', $field["cpf"])->get();
    }
    return $client;
  }

  public function getVehicles()
  {
    $vehicle = Vehicle::all();
    return $vehicle;
  }
	public function addVehicle($field)
  {
    $vehicle = new Vehicle();
    $vehicle->brand = $field['brand'];
    $vehicle->model = $field['model'];
    $vehicle->year = $field['year'];
    $vehicle->client_id = $field['codCliente'];
    $vehicle->save();
  }
}