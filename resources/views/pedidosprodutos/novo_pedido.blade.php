@extends('layout')

@section('cabecalho')

Novo Pedido
@endsection

@section('conteudo')

<form method="POST">
    @csrf
    <label for="ativo">User ID:</label>
    <select id="user_id" name="user_id">
    <?php foreach ($usuarios as $usuario): ?>
        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
    <?php endforeach; ?>
    </select>

    <label for="ativo">Status:</label>
    <select id="status" name="status">
        <option value="RE">Reservado</option>
        <option value="PA">Pago</option>
        <option value="CA">Cancelado</option>
    </select>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-outline-primary">Salvar</button>
            <a href="/" class=" btn btn-outline-primary ">Voltar</a>
        </div>
    </div>
</form>


@endsection