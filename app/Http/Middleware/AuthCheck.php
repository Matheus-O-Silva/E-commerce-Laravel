<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(!session()->has('LoggedUser')){
            return redirect('logar')->with('Você precisa estar logado para acessar esta página');
        }

        if(session()->has('LoggedUser') && ($request->path() !='logar' && $request->path() !='cadastrar')){
            return back();
        }

        return $next($request);
    }
}
