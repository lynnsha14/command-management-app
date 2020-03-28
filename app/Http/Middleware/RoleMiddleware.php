<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        //Exception  si l'utilisateur n'est pas connecter
        if ( !Auth::check() ) {
            abort(403,"Vous devez vous authentifier pour acceder a cette page");
        }
        
        //Exception si l'utilisateur est connecter avec un mauvais privileege
        if( Auth::user()->role != $role ) {
            abort(403,"Vous n'avez les droit d'acces a cette page");
        }

        return $next($request);
    }
}
