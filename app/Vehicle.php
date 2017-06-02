<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Vehicle;

class Vehicle extends Model
{

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