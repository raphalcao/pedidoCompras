@extends('layout')

@section('cabecalho')
Carrinho de Compras

@endsection

@section('conteudo')


<ul>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID </th>
                <th scope="col">ID Pedido</th>
                <th scope="col">ID Produto</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </tr>
        </thead>

        <tbody>
            <?php foreach ($dados as $dado) : ?>
                <tr>
                    <th scope="row">{{$dado->id}}</th>
                    <td>{{$dado->pedido_id}}</td>
                    <td>{{$dado->produto_id}}</td>
                    <td>{{$dado->status}}</td>
                    <td></td>
                    <td>
                        <form method="POST" action="/pedidos/{{$dado->id}}" onsubmit="return confirm('Deseja excluir {{addslashes($dado->id)}}?')">
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