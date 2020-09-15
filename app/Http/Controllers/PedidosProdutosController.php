<?php

namespace App\Http\Controllers;

use App\Produto;
use App\PedidoProduto;
use App\Pedido;
use Illuminate\Http\Request;

class PedidosProdutosController extends Controller
{   
    public function index(Request $request){
        $dados = PedidoProduto::query()->orderBy('pedido_id')->get();
        $produtos = Produto::query()->orderBy('id')->get();
        return view('pedidosprodutos.carrinho_compras', compact('dados', 'produtos')) ;
    }

    public function pedidocreate(int $produto_id){

        $dados = Produto::find($produto_id);
        $pedidos = Pedido::query()->orderBy('id')->get();
        
        return view('pedidosprodutos.confirma_pedido', compact('dados', 'pedidos'));
    }

    public function store(Request $request) 
    {        
       $user = PedidoProduto::create([
            'pedido_id' => $request['pedido_id'],
            'produto_id' => $request['produto_id'],
            'status' => $request['status'],
            'valor' => $request['valor']
        ]);
        
        return redirect()->route('indexproduto');

    }

    public function destroy(int $id) 
    {   
        
        Pedido::destroy($id);        
        return redirect()->route('pedidosindex');

    }
}
