<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Repartido;


class CheckRepartidorRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $usuario = Auth::user();
        if (Auth::check() && Repartido::where('id_repartidor', $usuario->id_usuario)->exists()) {
            return $next($request);
        }
        return redirect('/')->with('error', 'No tienes permisos para acceder a esta página.');
    }
}
