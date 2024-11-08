<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Artesano;
use Illuminate\Support\Facades\Auth;

class CheckArtesanoRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $usuario = Auth::user();
        if (Auth::check() && Artesano::where('id_artesano', $usuario->id_usuario)->exists()) {
            return $next($request);
        }
        return redirect('/')->with('error', 'No tienes permisos para acceder a esta página.');
    }
}
