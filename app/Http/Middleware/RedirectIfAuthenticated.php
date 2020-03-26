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
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {

            $auth = Auth::user()->roles()->first();

            switch ($auth->role) {
                case 'admin':
                    return  redirect()->route('admin');
                    break;
                case 'cashier':
                    return  redirect()->route('cashiers.index');
                    break;
                default:
                    return  redirect()->route('home');
                    break;
            }

        }

        return $next($request);
    }
}
