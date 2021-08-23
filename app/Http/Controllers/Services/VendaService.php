<?php

namespace App\Http\Controllers\Services;

use App\Models\Users;
use App\Models\Pedido;
use App\Models\ItensPedido;
use App\Http\Controllers\Controller;
use Log;
use Exception;

class VendaService extends Controller 
{
    public function finalizarVenda($products = [], Users $usuario)
    {
        try{
            $dtHoje = new \DateTime();

            $pedido = new Pedido;
            $pedido->datapedido = $dtHoje->format("Y-m-d H:i:s");
            $pedido->status = 'PENDENTE';
            $pedido->usuario_id = $usuario->id;

            $pedido->save();

            foreach($products as $product){
                $itens = new ItensPedido();

                $itens->quantidade = 1;
                $itens->valor      = $product->valor;
                $itens->dt_item    = $dtHoje->format("Y-m-d H:i:s");
                $itens->produto_id = $product->id;
                $itens->pedido_id  = $pedido->id;
                $itens->save(); 
            }
            
            return ['status' => 'ok','message' => 'compra finalizada com sucesso!'];

        } catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n"; 
            return ['status' => 'erro','message' => 'erro ao finalizar compra'];
        }
    }
}