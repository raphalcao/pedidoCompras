@extends('layout')

@section('cabecalho')
Lista de Clientes
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
        <th scope="col">Email</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($dados as $dado) : ?>
        <tr>
          <th scope="row">{{$dado->id}}</th>
          <td>{{$dado->name}}</td>
          <td>{{$dado->email}}</td>
          <td><a href="/clientes/alterar/{{$dado->id}}" class="btn btn-primary">Alterar</a></td>
          <td>            
            <form method="POST" action="/clientes/{{$dado->id}}" onsubmit="return confirm('Deseja excluir {{addslashes($dado->name)}}?')">
            
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Excluir</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>

    </tbody>
</ul>

<a href="/clientes/criar" class=" btn btn-outline-primary mb-2">Novo Cliente</a>
<a href="/" class=" btn btn-outline-primary mb-2">Ir para Produtos</a>


@endsection