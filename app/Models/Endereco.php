<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends RModel
{
    use HasFactory;

    protected $table = "enderecos";

    protected $fillable = ['logradouro', 'complemento', 'cep','numero', 'cidade', 'estado'];
}
