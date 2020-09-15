<?php

namespace App\Http\Controllers;

use App\Produto;
use App\User;
use App\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{

    public function index(Request $request)
    {

        $dados = Pedido::query()->orderBy('id')->get();
        $usuarios = User::query()->orderBy('id')->get();
        return view('pedidosprodutos.index_pedidosprodutos', compact('dados', 'usuarios'));
    }

    public function create(Request $request)
    {

        $usuarios = User::query()->orderBy('id')->get();

        return view('pedidosprodutos.novo_pedido', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $usuario = User::find('id');
        $user = Pedido::create([
            'user_id' => $request['user_id'],
            'status' => $request['status'],

        ]);


        return redirect()->route('indexprodutopedidos');
    }

    public function destroy(Request $request)
    {
        $pedido = Pedido::destroy($request->id);

        return redirect()->route('pedidosindex');
    }

}
