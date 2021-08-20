<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ClienteService as ControllersClienteService;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Endereco;
use App\Http\Controllers\Services\ClienteService;
use Illuminate\Support\Facades\Hash;
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
        $user = new Users();
        $user->fill($values);
        $user->login = $request->input("cpf", "");
        $user->password = Hash::make($request->password);
        

        $endereco = new Endereco($values);
        $endereco->logradouro = $request->input("logradouro", "");

        $clienteService = new ClienteService();
        $result = $clienteService->salvarUsuario($user,$endereco);

        $message = $result["message"];
        $status  = $result["status"];


        $request->session()->flash($status,$message);
        return redirect()->route('cadastrar');
    }
}
