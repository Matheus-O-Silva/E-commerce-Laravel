<?php

namespace App\Http\Controllers\Services;

use App\Models\Usuario;
use App\Models\Endereco;
use App\Http\Controllers\Controller;
use Log;
use Exception;

class ClienteService extends Controller {

    public function salvarUsuario(Usuario $usuario, Endereco $endereco)
    {
        try{
            
            $usuario->save();
            $endereco->usuario_id = $usuario->id;
            $endereco->save();

            return ['status' => 'ok','message' => 'Usuário cadastrado com sucesso!'];
    
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n"; 
                return ['status' => 'erro','message' => 'erro ao cadastrar usuário'];
            }
    }
}