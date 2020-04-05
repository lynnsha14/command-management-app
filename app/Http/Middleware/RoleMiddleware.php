<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param array $roles Authorised  roles array
     * @return mixed
     */
    public function handle($request, Closure $next,... $roles)
    {
        //Exception  si l'utilisateur n'est pas connecter
        if ( !Auth::check() ) {
            abort(403,"Vous devez vous authentifier pour acceder a cette page");
        }

        //Handle Access denied exception if the roles are not in roles array
        if( !in_array(Auth::user()->role,$roles)) {
            abort(403,"Vous n'avez les droit d'acces a cette page");
        }

        return $next($request);
    }
}
