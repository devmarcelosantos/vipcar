@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Listar Veiculos</h1>
<div class="ls-box">
  <h5 class="ls-title-5">Procurar Veiculo Específico:</h5>
  <form method="post" action="{{ route('vehicle.list') }}" class="ls-form ls-form-horizontal row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-4 col-xs-12">
        <b class="ls-label-text">Marca</b>
        <input type="text" name="brand" placeholder="Nome do Veiculo" class="ls-field ls-no-spin">
      </label>
      <label class="ls-label col-md-4 col-xs-12">
        <b class="ls-label-text">modelo</b>
        <input type="text" name="model" maxlength="11" placeholder="Modelo do Veiculo" class="ls-field">
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn" title="Buscar">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>

  <table class="ls-table ls-table-striped ls-bg-header">
    <thead>
      <tr>
        <th>Marca</th>
        <th class="hidden-xs ls-data-ascending">
          <a href="">Modelo</a>
        </th>
        <th>Ano</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($vehicles as $vehicle)
      <tr>
        <td><a href="" title="">{{ $vehicle->brand }}</a></td>
        <td class="hidden-xs">{{ $vehicle->model }}</td>
        <td>{{ $vehicle->year }}</td>
        <td class="ls-regroup ">
          <div data-ls-module="dropdown" class="ls-dropdown ">
            <a href="#" class="ls-btn ls-btn-sm ">Administrar</a>
            <ul class="ls-dropdown-nav">
              <li><a href="{{ route('vehicle.editPage', $vehicle->brand) }}">Alterar</a></li>
            </ul>
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop