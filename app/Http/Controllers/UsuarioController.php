<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\Produto;
use App\Models\Categoria;

class UsuarioController extends Controller
{
    public function logar(Request $request)
    {
        $data = [];

        if($request->isMethod("POST")){
            $login = $request->input("login");
            $senha = $request->input("senha");

            $login = preg_replace("/[^0-9]/","",$login);

            $credentials = ['login' => $login, 'password' => $senha];

            if(Auth::attempt($credentials)){
                return redirect()->route("home");
            } else {
                $request->session()->flash("erro", "Usuário e ou Senha inválidos");
                return redirect()->route("logar");
            }
        }

        return view("logar", $data);
    }
}