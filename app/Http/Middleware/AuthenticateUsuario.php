<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard()->check()) {
            return redirect('/home');
        }
        if (Auth::guard('usu')->check()) {
            return redirect('/home');
        }
        return $next($request);
    }
}
