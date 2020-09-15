@extends('layout')

@section('cabecalho')

Editar um Cliente
@endsection

@section('conteudo')

<form method="POST">
    @csrf
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">
      <input value="{{$dados->name}}" type="text" class="form-control" id="name" name="name" placeholder="Nome" required="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input value="{{$dados->email}}" type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required="true">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </div>
</form>


@endsection