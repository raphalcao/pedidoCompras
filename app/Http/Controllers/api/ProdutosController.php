<?php

namespace App\Http\Controllers\api;
use App\Produto;

class ProdutosController extends BaseController
{
    public function __construct()
    {
        $this->classe = Produto::class;
    }
}
