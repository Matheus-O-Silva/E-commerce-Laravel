<?php

namespace App\Http\Controllers\Services;

use App\Models\Users;
use App\Models\Endereco;
use App\Http\Controllers\Controller;
use Log;
use Exception;

class ClienteService extends Controller 
{

    public function salvarUsuario(Users $usuario, Endereco $endereco)
    {
        try{

            $dbUsuario = Users::where("login", $usuario->login)->first();

            if($dbUsuario){
                return ['status' => 'erro','message' => 'Usuário já cadastrado no sistema'];
            }
            
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