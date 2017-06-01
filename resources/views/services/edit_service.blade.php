@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Editar Serviço</h1>
<div class="ls-box">
  <form method="post" action="{{route('service.edit',$service->id)}}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-3">
        <b class="ls-label-text">Nome</b>
        <input value="{{ $client->name }}" type="text" data-ls-module="charCounter" maxlength="100" name="name" placeholder="Nome do Servico" required >
      </label>
       <label class="ls-label col-md-2">
        <b class="ls-label-text">Descrição</b>
        <input value="{{ $client->cpf }}" class="ls-no-spin" type="number" name="descripion" placeholder="Modelo" required>
      </label>
       <label class="ls-label col-md-2">
        <b class="ls-label-text">Ano</b>
        <input value="{{ $client->email }}" class="ls-no-spin" type="integer" name="year" placeholder="Ano" required>
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Atualizar" class="ls-btn" title="update">
    </div>
  </form>
</div>
@stop