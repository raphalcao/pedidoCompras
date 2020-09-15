@extends('layout')

@section('cabecalho')
Novo produto
@endsection

@section('conteudo')

<form method="POST">
    @csrf
    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="descricao" class="col-sm-2 col-form-label">Descrição</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" required="true">
        </div>
    </div>
    <div class="form-group row">
        <label for="valor" class="col-sm-2 col-form-label">Valor</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="valor" id="valor" placeholder="R$" required="true">
        </div>
    </div>

    <label for="ativo">Ativo:</label>

    <select id="ativo" name="ativo">
        <option value="S">Sim</option>
        <option value="N">Não</option>
    </select>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
            <a href="/" class=" btn btn-outline-primary ">Voltar</a>
        </div>
    </div>
</form>

@endsection