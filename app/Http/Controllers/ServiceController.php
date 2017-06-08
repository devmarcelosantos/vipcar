<?php

namespace App\Http\Controllers;
use DB;
use \App\Service;
use Illuminate\Http\Request;
use App\Http\Requests;


class ServiceController extends Controller
{
  private $service;

  public function __construct(Service $service)
  {
    $this->services = $service;
    $this->service = $service;

    $this->middleware('auth');
  }
  //---------------- Listar Serviço Específico -----------------//
  public function get_list_service()
  {
    return list_services();
  }

  public function post_list_service(Request $field)
  {
    if(is_null($field['name']) && is_null($field['description'])) {
      $services = $this->services->getServices();
    } else {
      $services = $this->service->getService($field);
    }
    return view('service/list_service', compact('services'));
  }
  //------------------------------------------------------------//

  //--------------------- Listar Serviços ----------------------//
  public function list_services()
  {                       
    $services = $this->services->getServices();
    return view('service/list_service', compact('services'));
  }
  //------------------------------------------------------------//
  
  //-------------------- Adicionar Serviços --------------------//
  public function get_add_service()
  {
    return view('service/add_service');
  }

  public function post_add_service(Request $info)
  {
    $service = $this->service->addService($info);
    return redirect()->route('services');
  }
  //------------------------------------------------------------//

 //-------------------- Editar Serviço --------------------//
    public function get_edit_service($id)
  {
    $service = $this->service->find($id);
    return view('service/edit_service', compact('service'));
  }

  public function post_edit_service(Request $info, $id)
  {
    $service = $this->service->find($id);
    $service->name = $info['name'];
    $service->description = $info['description'];
    $service->value = $info['value'];
    $service->save();
    return redirect()->route('services');
  }
  //------------------------------------------------------------//
  
}

