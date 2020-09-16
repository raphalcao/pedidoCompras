<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class ProdutosController extends Controller
{
    
    public function index()
    {
        return Produto::all();
    }

    public function store(Request $request)
    {
        Produto::create($request->all());
    }

    public function show($id)
    {
        return Produto::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $dados = Produto::findOrFail($id);
        $dados->update($request->all());
    }

    public function destroy($id)
    {
        $dados = Produto::findOrFail($id);
        $dados->delete();
    }
}
