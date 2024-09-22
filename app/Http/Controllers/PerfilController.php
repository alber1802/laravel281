<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function mostrarPerfil()
    {
        // Obtiene solo los datos del usuario autenticado
        $usuario = User::all(); // Esto obtiene el usuario autenticado

        // Pasamos el usuario a la vista 'perfil'
        return view('Perfil.PerfilUsuario', ['usuario' => $usuario]);
    }
}
