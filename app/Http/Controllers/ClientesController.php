<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(Request $request) {

        $dados = User::query()->orderBy('id')->get();

        $mensagem = $request->session()->get('mensagem');
        
        return view('clientes.index_clientes', compact('dados', 'mensagem')) ;
      
    }

    public function create(Request $request) {
        
        return view('clientes.create_clientes');      

    }

    public function store(Request $request) 
    {        
       $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        
        $request->session()
            ->flash('mensagem',
                  "Usuário {$user->name} criado com sucesso.");
        return redirect()->route('index');

    }

    public function destroy(Request $request)
    {
        $user = User::destroy($request->id);
        $request->session()
            ->flash('mensagem',
                  "Usuário removido com sucesso.");

        return redirect()->route('index');
    }

    public function editar(int $id)
    {
       $dados = User::find($id);

        return view('clientes.edit_clientes', compact('dados'));
    }

    public function update(Request $request)
    {
        $pessoa = User::find($request->id);
        $pessoa->update($request->all());
        return redirect()->route('index');
    }
}