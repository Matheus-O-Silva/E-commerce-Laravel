<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends RModel
{
    use HasFactory;

    protected $table = "pedidos";

    protected $fillable = ['datapedido', 'status', 'usuario_id'];
}
