@extends('layout')

@section('cabecalho')
Lista de Produtos
@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">
  {{ $mensagem }}
</div>
@endif


<ul>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Valor</th>
        <th scope="col">Ativo</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($dados as $dado) : ?>
        <tr>
          <th scope="row">{{$dado->id}}</th>
          <td>{{$dado->nome}}</td>
          <td>{{$dado->descricao}}</td>
          <td>{{$dado->valor}}</td>
          <td>{{$dado->ativo}}</td>
          <td>            
            <form method="POST" action="/produtos/{{$dado->id}}" onsubmit="return confirm('Deseja excluir {{addslashes($dado->nome)}}?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Excluir</button>
            </form>
            <a href="/produtos/alterar/{{$dado->id}}" class="btn btn-primary">Alterar</i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>

    </tbody>
</ul>

<a href="/produtos/criar" class=" btn btn-dark mb-2">Adicionar Produto</a>
<a href="/clientes" class=" btn btn-dark mb-2">Ir para clientes</a>


@endsection