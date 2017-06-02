@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Listar Serviços</h1>
<div class="ls-box">
  <h5 class="ls-title-5">Procurar Serviço Específico:</h5>
  <form method="post" action="{{ route('service.list') }}" class="ls-form ls-form-horizontal row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-4 col-xs-12">
        <b class="ls-label-text">Nome</b>
        <input type="text" name="name" placeholder="Nome do Servico" class="ls-field ls-no-spin">
      </label>
      <label class="ls-label col-md-4 col-xs-12">
        <b class="ls-label-text">Descrição</b>
        <input type="text" name="descripion" maxlength="100" placeholder="Descrição do Servico" class="ls-field">
      </label>
       <label class="ls-label col-md-4 col-xs-12">
        <b class="ls-label-text">Valor</b>
        <input type="decimal" name="value" placeholder="Valor do Servico" class="ls-field">
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
        <th>Nome</th>
        <th class="hidden-xs ls-data-ascending">
          <a href="">Descrição</a>
        </th>
        <th>Valor</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    @if (count($services))
    @foreach ($services as $service)
      <tr>
        <td><a href="" title="">{{ $service->name }}</a></td>
        <td class="hidden-xs">{{ $service->descripion }}</td>
        <td>{{ $service-> value }}</td>
        <td class="ls-regroup ">
          <div data-ls-module="dropdown" class="ls-dropdown ">
            <a href="#" class="ls-btn ls-btn-sm ">Administrar</a>
            <ul class="ls-dropdown-nav">
              <li><a href="{{ route('service.editPage', $service->id) }}">Alterar</a></li>
            </ul>
          </div>
        </td>
      </tr>
    @endforeach
      @else
      <p>Serviço não encontrado!</p>
    @endif
    </tbody>
  </table>
</div>
@stop