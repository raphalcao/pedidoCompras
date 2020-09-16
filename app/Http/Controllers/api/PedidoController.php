<?php

namespace App\Http\Controllers\api;
use App\Pedido;

class PedidoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Pedido::class;
    }
}
