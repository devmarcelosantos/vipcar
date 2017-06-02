@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-user-add">Adicionar Serviços</h1>
<div class="ls-box">
  <form method="POST" action="{{ route('service.postAdd') }}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-3">
        <b class="ls-label-text">Nome:</b>
        <input type="text" data-ls-module="charCounter" maxlength="50" name="name" placeholder="Nome do Serviço" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Descrição:</b>
        <input class="ls-no-spin" type="text" maxlength="100" name="descripion" placeholder="Descrição" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Valor:</b>
        <input class="ls-no-spin" type="decimal" name="value" placeholder="Ano" required >
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Inserir" class="ls-btn" title="Inserir">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>
</div>
@stop