<?php

namespace App\Http\Controllers;
use DB;
use \App\Vehicle;
use \App\Client;
use Illuminate\Http\Request;
use App\Http\Requests;

class VehicleController extends Controller
{
	private $vehicle;
	private $client;

	public function __construct(Vehicle $vehicle, Client $client)
  {
    $this->vehicle = $vehicle;
    $this->vechicles = $vehicle;

		$this->client = $client;
    $this->middleware('auth');
  }

  public function get_add_vehicle(Request $field)
  {
		if(!is_null($field['name']) || !is_null($field['cpf'])) {
      $clients = $this->client->getClient($field);
    }
  	return view('vehicle/add_vehicle', compact('clients'));
  }

  public function post_add_vehicle(Request $info)
  {
    $vehicle = $this->vehicle->addVehicle($info);
    return redirect()->route('vehicles');
  }
}