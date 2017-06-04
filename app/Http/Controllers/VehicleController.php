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
  private $clients;

	public function __construct(Vehicle $vehicle, Client $client)
  {
    $this->vehicle = $vehicle;
    $this->vehicles = $vehicle;

		$this->client = $client;
    $this->clients = $client;
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
    public function get_list_vehicle()
  {
    return list_vehicles();
  }

  public function post_list_vehicle(Request $field)
  {
    if(is_null($field['brand']) && is_null($field['model'])) {
      $vehicles = $this->vehicles->getVehicles();
    } else {
      $vehicles = $this->vehicle->getVehicle($field);
       $clients = $this->client->getclient($field);
    }
    return view('vehicle/list_vehicle', compact('vehicle'));
  }
   public function list_vehicles()
  {                       
    $vehicles = $this->vehicles->getVehicles();
    $clients = $this->clients->getclients();
    return view('vehicle/list_vehicle', compact('vehicles'));
  }
}