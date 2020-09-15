@extends('layout')

@section('cabecalho')
Lista de Pedidos de Clientes

@endsection

@section('conteudo')


<ul>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID Pedido</th>
        <th scope="col"></th>
        <th scope="col">Status</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($dados as $dado) : ?>        
        <tr>
          <th scope="row">{{$dado->id}}</th>
          <td></td>
          <td>{{$dado->status}}</td>
          <td>            
            <form method="POST" action="/produtopedidos/{{$dado->id}}" onsubmit="return confirm('Deseja excluir {{addslashes($dado->name)}}?')">
            
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Excluir</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      

    </tbody>
</ul>
<a href="/" class=" btn btn-outline-primary mb-2">Voltar</a>
@endsection