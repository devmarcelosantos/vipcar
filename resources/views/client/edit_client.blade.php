@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Editar Cliente</h1>
<div class="ls-box">
  <form method="post" action="{{route('client.edit',$client->id)}}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-3">
        <b class="ls-label-text">Nome</b>
        <input value="{{ $client->name }}" type="text" data-ls-module="charCounter" maxlength="100" name="name" placeholder="Nome do Produto" required >
      </label>
       <label class="ls-label col-md-2">
        <b class="ls-label-text">CPF</b>
        <input value="{{ $client->cpf }}" class="ls-no-spin" type="number" name="cpf" placeholder="Endereço" required>
      </label>
       <label class="ls-label col-md-2">
        <b class="ls-label-text">Email</b>
        <input value="{{ $client->email }}" class="ls-no-spin" type="text" name="email" placeholder="Endereço" required>
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Endereco</b>
        <input value="{{ $client->address }}" class="ls-no-spin" type="text" name="address" placeholder="Endereço" required>
      </label>
       <label class="ls-label col-md-2">
        <b class="ls-label-text">Telefone</b>
        <input value="{{ $client->phone }}" class="ls-no-spin" type="number" name="phone" placeholder="Endereço" required>
      </label>
       <label class="ls-label col-md-2">
        <b class="ls-label-text">Data de Nascimento</b>
        <input value="{{ $client->birth_date }}" class="ls-no-spin" type="number" name="birth_date" placeholder="Endereço" required>
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Atualizar" class="ls-btn" title="update">
    </div>
  </form>
</div>
@stop