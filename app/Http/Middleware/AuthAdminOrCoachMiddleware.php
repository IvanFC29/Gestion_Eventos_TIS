<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminOrCoachMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Verificar si el usuario está autenticado y tiene el rol 'admin' o 'coach'
        if (Auth::check() && (Auth::user()->rol == 'admin' || Auth::user()->rol == 'coach')) {
            return $next($request);
        }

        // Redirigir o manejar el acceso denegado para otros casos
        return redirect('/')->with('error', 'No tienes permisos para acceder a esta página.');
    }
}

