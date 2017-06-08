@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Editar Veiculo</h1>
<div class="ls-box">
  <form method="post" action="{{route('vehicle.edit',$vehicle->id)}}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <label class="ls-label col-md-3">
        <b class="ls-label-text">Marca</b>
        <input value="{{ $vehicle->name }}" type="text" data-ls-module="charCounter" maxlength="100" name="brand" placeholder="Marca do Veiculo" required >
      </label>
       <label class="ls-label col-md-2">
        <b class="ls-label-text">Modelo</b>
        <input value="{{ $vehicle->model }}" class="ls-no-spin" type="number" name="model" placeholder="Modelo" required>
      </label>
       <label class="ls-label col-md-2">
        <b class="ls-label-text">Ano</b>
        <input value="{{ $vehicle->year }}" class="ls-no-spin" type="integer" name="year" placeholder="Ano" required>
      </label>
    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Atualizar" class="ls-btn" title="update">
    </div>
  </form>
</div>
@stop