<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // Redirect to admin page if it's admin page
            if ( Auth::guard($guard)->user()->role == "admin" ) {
                return redirect()->route("home.admin");
            }
            //Redirect to cashier page if it's cashier page
            if ( Auth::guard($guard)->user()->role == "cashier" ) {
                return redirect()->route("home.cashier");
            }
        }

        return $next($request);
    }
}
