<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use Exception;

class ClienteController extends Controller
{
    public function cadastrar(Request $request)
    {
        $data = [];
        return view("cadastrar", $data);
    }

    public function cadastrarCliente(Request $request)
    {
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        $usuario->login = $request->input("cpf", "");

        $endereco = new Endereco($values);
        $endereco->logradouro = $request->input("logradouro", "");

        
        try{
            
        $usuario->save();
        $endereco->usuario_id = $usuario->id;
        $endereco->save();

        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n"; 
        }

        return redirect()->route('cadastrar');
    }
}
