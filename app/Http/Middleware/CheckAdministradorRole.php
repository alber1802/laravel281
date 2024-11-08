<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdministradorRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $usuario = Auth::user();
        if (Auth::check() && $usuario->email === 'Administrador@gmail.com') {
            return $next($request);
        }
        return redirect('/')->with('error', 'No tienes permisos para acceder a esta página.');
    }
}
