<?php

namespace App\Http\Controllers;

use App\User;
use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function index(Request $request) {

        $dados = Produto::query()->orderBy('id')->get();

        $mensagem = $request->session()->get('mensagem');
        
        return view('produtos.index_produtos', compact('dados', 'mensagem')) ;
    }
    
    public function create(Request $request) {
        
        return view('produtos.create_produtos');      

    }
    
    public function store(Request $request) 
    {

        
       $produto = Produto::create([
            'nome' => $request['nome'],
            'descricao' => $request['descricao'],
            'valor' => $request['valor'],
            'ativo' => $request['ativo']
        ]);
        
        $request->session()
            ->flash('mensagem',
                  "Produto {$produto->nome} criado com sucesso.");
        return redirect()->route('indexproduto');

    }

    public function editar(int $id)
    {
       $dados = Produto::find($id);

        return view('produtos.edit_produtos', compact('dados'));
    }

    public function update(Request $request)
    {
        $produto = Produto::find($request->id);
        $produto->update($request->all());
        return redirect()->route('indexproduto');
    }

    public function destroy(Request $request)
    {
        $user = Produto::destroy($request->id);
        $request->session()
            ->flash('mensagem',
                  "Produto removido com sucesso.");

        return redirect()->route('indexproduto');
    }

}
