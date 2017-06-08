@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Listar Clientes</h1>
<div class="ls-box">
  <h5 class="ls-title-5">Procurar Cliente Específico:</h5>
  <form method="post" action="{{ route('client.list') }}" class="ls-form ls-form-horizontal row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-4 col-xs-12">
        <b class="ls-label-text">Nome:</b>
        <input type="text" name="name" placeholder="Nome do cliente" class="ls-field ls-no-spin">
      </label>
      <label class="ls-label col-md-2 col-xs-12">
        <b class="ls-label-text">CPF:</b>
        <input type="text" name="cpf" maxlength="11" placeholder="Cpf do cliente" class="ls-field">
      </label>
    </fieldset>
    <div class="ls-actions-btn ls-no-padding-bottom">
      <input type="submit" value="Buscar" class="ls-btn" title="Buscar">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>

  <table class="ls-table ls-table-striped ls-bg-header">
    <thead>
      <tr>
        <th>Nome</th>
        <th class="hidden-xs ls-data-ascending">
          <a href="">Email</a>
        </th>
        <th>Endereço</th>
        <th class="hidden-xs">Telefone</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    @if (count($clients))
      @foreach ($clients as $client)
        <tr>
          <td><a href="" title="">{{ $client->name }}</a></td>
          <td class="hidden-xs">{{ $client->email }}</td>
          <td>{{ $client->address }}</td>
          <td class="hidden-xs">{{ $client->phone }}</td>
          <td class="ls-regroup ">
            <div data-ls-module="dropdown" class="ls-dropdown ">
              <a href="#" class="ls-btn ls-btn-sm ">Administrar</a>
              <ul class="ls-dropdown-nav">
                <li><a href="{{ route('client.edit', $client->id) }}">Alterar</a></li>
              </ul>
            </div>
          </td>
        </tr>
      @endforeach
    @else
      <p>Cliente não encontrado!</p>
    @endif
    </tbody>
  </table>
</div>
@stop