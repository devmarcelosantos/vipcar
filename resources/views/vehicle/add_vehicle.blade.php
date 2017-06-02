@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-user-add">Adicionar Veiculo</h1>
<div class="ls-box">
  <h5 class="ls-title-5">Procurar Cliente:</h5>
  <form method="get" action="{{ route('vehicle.add') }}" class="ls-form ls-form-horizontal row">
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
    <div class="ls-actions-btn">
      <input type="submit" value="Buscar" class="ls-btn" title="Buscar">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>

   <table class="ls-table ls-table-striped ls-bg-header">
    <thead>
      <tr>
        <th>CodCadastro</th>
        <th class="hidden-xs ls-data-ascending">
          <a href="">Nome</a>
        </th>
        <th>CPF</th>
        <th class="hidden-xs">Telefone</th>
      </tr>
    </thead>
    @if (count($clients))
      @foreach ($clients as $client)
    <tbody>
        <tr>
          <td><a href="" title="">{{ $client->id }}</a></td>
          <td class="hidden-xs">{{ $client->name }}</td>
          <td>{{ $client->cpf }}</td>
          <td class="hidden-xs">{{ $client->phone }}</td>
        </tr>
      @endforeach
    @else
      <p>Cliente não encontrado!</p>
    @endif
    </tbody>
  </table>
  
  <hr>
  <h5 class="ls-title-5">Cadastrar Veículo:</h5>
  <form method="POST" action="{{ route('vehicle.postAdd') }}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">CodCliente (Proprietário):</b>
        <input class="ls-no-spin" type="number" min="1" name="codCliente" placeholder="Código" required >
      </label>
      <label class="ls-label col-md-3">
        <b class="ls-label-text">Marca:</b>
        <input type="text" maxlength="20" name="brand" placeholder="Marca do Veículo" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Modelo:</b>
        <input class="ls-no-spin" type="text" name="model" placeholder="Modelo" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Ano:</b>
        <input class="ls-no-spin" type="number" min="1900" max="3000" name="year" placeholder="Ano" required >
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Inserir" class="ls-btn" title="Inserir">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>
</div>
@stop