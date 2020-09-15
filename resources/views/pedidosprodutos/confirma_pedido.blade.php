@extends('layout')

@section('cabecalho')

Confirmar Pedido
@endsection

@section('conteudo')

<form method="POST">
    @csrf
    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input value="{{$dados->nome}}" readonly="true" type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="true">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <label for="ativo">Pedido ID:</label>
            <select id="pedido_id" name="pedido_id">
                <?php foreach ($pedidos as $pedido) : ?>
                    <option value="{{$pedido->id}}">{{$pedido->id}}</option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Produto ID</label>
        <div class="col-sm-10">
            <input value="{{$dados->id}}" readonly="true" type="text" class="form-control" id="produto_id" name="produto_id" required="true">
        </div>
    </div>
    <label for="status">Status:</label>

    <select id="status" name="status">
        <option value="RE">Reservado</option>
        <option value="PA">Pago</option>
        <option value="CA">Cancelado</option>
    </select>
    <div class="form-group row">
        <label for="valor" class="col-sm-2 col-form-label">Valor</label>
        <div class="col-sm-10">
            <input value="{{$dados->valor}}" type="text" readonly="true" class="form-control" name="valor" id="valor" required="true">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-outline-primary">Confirmar Pedido</button>
            <a href="/" class=" btn btn-outline-primary">Voltar</a>
        </div>

    </div>

</form>


@endsection