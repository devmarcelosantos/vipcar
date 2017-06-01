@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-home">Bem vindo ao Painel VipCar</h1>

<div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3">Informações do Sistema</h2>
    <p class="ls-float-right ls-float-none-xs ls-small-info">Quantidade válida até <strong>30/05/2017</strong></p>
  </header>
  <div id="sending-stats" class="row">
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">CLIENTES CADASTRADOS</h6>
        </div>
        <div class="ls-box-body">
          <strong>{{ App\Client::count() }}</strong>
          <small>Clientes</small>
        </div>
        <div class="ls-box-footer">
          <a href="{{ route('clients') }}" aria-label="Buscar Cliente" class="ls-btn ls-btn-sm" title="Buscar Cliente">Buscar Cliente</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">VEICULOS CADASTRADOS</h6>
        </div>
        <div class="ls-box-body">
          <strong class="ls-ico-bars"></strong>
          <small>Veiculos</small>
        </div>
        <div class="ls-box-footer">
          <a href="#" aria-label="Comprar mais envios" class="ls-btn ls-btn-sm" title="Buscar Veiculo">Buscar Veiculo</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box ls-box-centered">
        <strong>TEXTO</strong>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">SERVIÇOS EM ABERTO</h6>
        </div>
        <div class="ls-box-body">
          <div class="ls-box-body">
            <strong>100.000</strong>
            <small>ATUAL</small>
          </div>
          <div class="ls-box-footer">
          <a href="#" aria-label="Comprar mais envios" class="ls-btn ls-btn-sm" title="Ver Servicos">Ver Serviços</a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
