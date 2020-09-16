<?php

namespace App\Http\Controllers\api;
use App\PedidoProduto;

class PedidosProdutosController extends BaseController
{
    public function __construct()
    {
        $this->classe = PedidoProduto::class;
    }
}

