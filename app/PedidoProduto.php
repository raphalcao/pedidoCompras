<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'pedido_id',
        'produto_id',
        'status',
        'valor'

    ];
    
    public function produto()
    {
        return $this->belongsTo('App\Produto', 'produto_id', 'id');
    }
}