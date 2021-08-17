<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

            $credential = ['login' => $login, 'password' => $senha];

            if(Auth::attempt($credential)){
                return redirect()->route("home");
            } else {
                $request->session()->flash("erro", "Usuário e ou Senha inválidos");
                return redirect()->route("logar");
            }
        }

        return view("logar", $data);
    }
}