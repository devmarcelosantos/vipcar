@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-user-add">Adicionar Veiculo</h1>
<div class="ls-box">
  <form method="post" action="/vehicle/add" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-3">
        <b class="ls-label-text">Marca</b>
        <input type="text" data-ls-module="charCounter" maxlength="100" name="brand" placeholder="Marca do Veiculo" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Modelo</b>
        <input class="ls-no-spin" type="text" name="model" placeholder="Modelo" required >
      </label>
      <label class="ls-label col-md-2">
        <b class="ls-label-text">Ano</b>
        <input class="ls-no-spin" type="integer" name="year" placeholder="Ano" required >
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Inserir" class="ls-btn" title="Inserir">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>
</div>
@stop