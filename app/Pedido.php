<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'user_id',
        'status'
    ];
}
