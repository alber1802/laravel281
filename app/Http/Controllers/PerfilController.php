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
    public function Actualizar(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'paterno' => 'required|string|max:255',
            'materno' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
            'password' => 'nullable|string|min:8', // La contraseña es opcional
            'email'   => 'required|string|max:255',
        ]);
    
        // Obtener el usuario autenticado
        $usuario = Auth::user();
    
        // Actualizar los datos
        $usuario->nombre = $request->input('nombre');
        $usuario->name = $request->input('name');
        $usuario->paterno = $request->input('paterno');
        $usuario->materno = $request->input('materno');
        $usuario->telefono = $request->input('telefono');
        $usuario->direccion = $request->input('direccion');
        $usuario->email = $request->input('email');
    
        // Si el usuario ingresó una nueva contraseña, actualiza la contraseña
        if ($request->filled('password')) {
            $usuario->password = bcrypt($request->input('password'));
        }
    
        // Guardar los cambios
        $usuario->save();
    
         // Establecer el mensaje flash de éxito
        session()->flash('success', 'Perfil actualizado correctamente.');
        
        // Solo regresa a la misma vista sin redirección
        return view('Perfil.PerfilUsuario', ['usuario' => $usuario]);
    }
    
}