<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string $role Role utilisateur
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        // Utilisateur Non connecter
        if ( !$this->auth->check() ) {
            abort(403,"Vou devez vous authentifier pour acceder a cette page");
        }
        //Unitilisateur connecter mais avec un mauvais role
        if (!empty($role) AND !$this->auth->user()->role != $role ) {
            abort(404);
        }

        return $next($request);
    }
}
