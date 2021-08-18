<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends RModel
{
    use HasFactory;

    protected $table = "itens_pedidos";

    protected $fillable = ['qunatidade', 'valor', 'dt_item','produto_id','pedido_id'];
}
