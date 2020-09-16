<?php
namespace App\Http\Controllers\api;
use App\User;

class ClientesController extends BaseController
{
    public function __construct()
    {
        $this->classe = User::class;
    }
}
