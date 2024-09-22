<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function mostrarPerfil($id)
    {
        // Obtiene solo los datos del usuario autenticado
        $usuario = User::findOrFail($id); // Obtiene un único usuario
        return view('Perfil.PerfilUsuario', compact('usuario'));
    }
}
