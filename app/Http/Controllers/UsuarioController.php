<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class UsuarioController extends Controller
{
    public function logar(Request $request)
    {

        if($request->isMethod("POST")){
   
           $userInfo = Users::where('email','=', $request->email)->first();
   
           if(!$userInfo){
            $request->session()->flash("erro", "Usuário e ou Senha inválidos");
            return redirect()->route("logar");

           }else{
               //check password
               if(Hash::check($request->password, $userInfo->password)){
                   $request->session()->put('LoggedUser', $userInfo->id);
                   return redirect()->route("home");
   
               }else{
                $request->session()->flash("erro", "Usuário e ou Senha inválidos");
                return redirect()->route("logar");
               }
           }
       }

        return view("logar");
    }

    public function sair()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser','cart');
            return redirect()->route("home");
        }
    }
}