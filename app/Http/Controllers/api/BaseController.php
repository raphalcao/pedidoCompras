<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;

abstract class BaseController 
{
    protected $classe;
    
    public function index()
    {
        return $this->classe::all();
    }

    public function store(Request $request)
    {
        $this->classe::create($request->all());
    }

    public function show($id)
    {
        return $this->classe::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $dados = $this->classe::findOrFail($id);
        $dados->update($request->all());
    }

    public function destroy($id)
    {
        $dados = $this->classe::findOrFail($id);
        $dados->delete();
    }
}
