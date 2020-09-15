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
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
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
            </a>
          </td>
          <td><a href="/produtos/alterar/{{$dado->id}}" class="btn btn-primary mb-2">Alterar</i></td>
          <td><a href="/pedidos/{{$dado->id}}" class="btn btn-outline-primary">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
                <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
              </svg>
              </button>
          </td>
        </tr>
      <?php endforeach; ?>

    </tbody>
</ul>

<a href="/produtos/criar" class="btn btn-outline-primary mb-2">Adicionar Produto</a>
<a href="/clientes" class="btn btn-outline-primary mb-2">Ir para clientes</a>
<a href="/produtopedidos/criar" class="btn btn-outline-primary mb-2">Novo Pedido</a>
<a href="/produtopedidos" class="btn btn-outline-primary mb-2">Lista de Pedidos</a>
<a href="/pedidos" class="btn btn-outline-primary mb-2">Carrinho de Compras</a>


@endsection