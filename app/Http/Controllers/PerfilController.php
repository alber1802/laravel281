<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Cliente;
use App\Models\Artesano;
use App\Models\Repartido;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function mostrarPerfil()
    {
        // Obtiene solo los datos del usuario autenticado
       $usuario = Auth::user(); // Obtiene el usuario autenticado directamente
      // dd($usuario);

       if (Cliente::where('id_cliente', $usuario->id_usuario)->exists()) {
        // Si es clienteç
            $perfil = Cliente::where('id_cliente', $usuario->id_usuario)->first();
            return view('Perfil.PerfilUsuario', compact('usuario', 'perfil'));
            
        } elseif (Artesano::where('id_artesano', $usuario->id_usuario)->exists()) {
            // Si es repartidor, cargar también el vehículo
            $perfil = Artesano::with('comunidad')->where('id_artesano', $usuario->id_usuario)->first();
          // dd($perfil);
           return view('Perfil.PerfilArtesano', compact('usuario', 'perfil'));

        } elseif (Repartido::where('id_repartidor',$usuario->id_usuario)->exists()){
            // Si es artesano, cargar también la comunidad
           
            $perfil = Repartido::with('vehiculo')->where('id_repartidor', $usuario->id_usuario)->first();
            //dd($perfil);
            
            return view('Perfil.PerfilRepartidor', compact('usuario', 'perfil'));

        } else {
            // Si no se identifica el tipo de usuario, maneja un error o redirige
            abort(404, 'Tipo de usuario no encontrado');
        }

        // Retorna la vista con los datos del usuario y del perfil específico
        //return view('Perfil.PerfilUsuario', compact('usuario', 'perfil'));
    }
    public function Actualizar(Request $request){
       // Obtener el usuario autenticado
       $usuario = Auth::user();

       // Validar y actualizar solo los campos ingresados en la tabla de usuarios
       if ($request->filled('name')) {
           $usuario->name = $request->name;
       }
       if ($request->filled('nombre')) {
           $usuario->nombre = $request->nombre;
       }
       if ($request->filled('materno')) {
           $usuario->materno = $request->materno;
       }
       if ($request->filled('paterno')) {
           $usuario->paterno = $request->paterno;
       }

       if ($request->filled('email')) {
           $usuario->email = $request->email;
       }

       if ($request->filled('telefono')) {
           $usuario->telefono = $request->telefono;
       }

       if ($request->filled('direccion')) {
           $usuario->direccion = $request->direccion;
       }

       if ($request->filled('sexo')) {
           $usuario->sexo = $request->sexo;
       }
       if ($request->hasFile('file')) {
        // Almacenar la imagen en la carpeta 'public/imagenesPerfil'
        $imagenes = $request->file('file')->store('public/imagenesPerfil');
        
        // Obtener la URL pública de la imagen almacenada
        $url = Storage::url($imagenes);
        
        // Asignar la URL al campo 'url' del usuario
        $usuario->url = $url;
        }
    

       // Guardar los cambios del usuario
       $usuario->save();

       // Buscar si el usuario tiene un perfil de cliente
       $cliente = Cliente::where('id_cliente', $usuario->id_usuario)->first();

       if ($cliente) {
           // Si el cliente existe y la preferencia fue ingresada, actualizar solo la preferencia
           if ($request->filled('preferencia')) {
               $cliente->preferencia = $request->preferencia;
           }

           // Guardar los cambios del cliente
           $cliente->save();
       }
       
        
        // Solo regresa a la misma vista sin redirección
        return redirect(route('PerfilUsuario'));
    }
    
    public function ActualizarRepartidor(Request $request)
    {
        // Obtener el usuario autenticado
       $usuario = Auth::user();

       // Validar y actualizar solo los campos ingresados en la tabla de usuarios
       if ($request->filled('name')) {
           $usuario->name = $request->name;
       }
       if ($request->filled('nombre')) {
           $usuario->nombre = $request->nombre;
       }
       if ($request->filled('materno')) {
           $usuario->materno = $request->materno;
       }
       if ($request->filled('paterno')) {
           $usuario->paterno = $request->paterno;
       }

       if ($request->filled('email')) {
           $usuario->email = $request->email;
       }

       if ($request->filled('telefono')) {
           $usuario->telefono = $request->telefono;
       }

       if ($request->filled('direccion')) {
           $usuario->direccion = $request->direccion;
       }

       if ($request->filled('sexo')) {
           $usuario->sexo = $request->sexo;
       }
       if ($request->hasFile('file')) {
        // Almacenar la imagen en la carpeta 'public/imagenesPerfil'
        $imagenes = $request->file('file')->store('public/imagenesPerfil');
        
        // Obtener la URL pública de la imagen almacenada
        $url = Storage::url($imagenes);
        
        // Asignar la URL al campo 'url' del usuario
        $usuario->url = $url;
        }
    

       // Guardar los cambios del usuario
       $usuario->save();

       $repartidor = Repartido::where('id_repartidor', $usuario->id_usuario)->first();

       if ($repartidor) {
           // Actualizar disponibilidad del repartidor si está presente en la solicitud
           if ($request->filled('disponibilidadR')) {
               $repartidor->disponibilidadR = $request->disponibilidadR;
           }
   
           // Guardar los cambios en el repartidor
           $repartidor->save();
   
           // Buscar el vehículo relacionado con el repartidor
           $vehiculo = $repartidor->vehiculo()->first(); // Asegúrate de tener una relación 'vehiculo' definida en el modelo Repartido
   
           if ($vehiculo) {
               // Actualizar los datos del vehículo si están presentes en la solicitud
               if ($request->filled('modeloV')) {
                   $vehiculo->modeloV = $request->modeloV;
               }
               if ($request->filled('placaV')) {
                   $vehiculo->placaV = $request->placaV;
               }
               if ($request->filled('marcaV')) {
                   $vehiculo->marcaV = $request->marcaV;
               }
               if ($request->filled('colorV')) {
                $vehiculo->colorV= $request->colorV;
            }
   
               // Guardar los cambios en el vehículo
               $vehiculo->save();
           }
       }
        // Solo regresa a la misma vista sin redirección
        return redirect(route('PerfilUsuario'));
    }
    public function ActualizarArtesano(Request $request) {
         // Obtener el usuario autenticado
       $usuario = Auth::user();

       // Validar y actualizar solo los campos ingresados en la tabla de usuarios
       if ($request->filled('name')) {
           $usuario->name = $request->name;
       }
       if ($request->filled('nombre')) {
           $usuario->nombre = $request->nombre;
       }
       if ($request->filled('materno')) {
           $usuario->materno = $request->materno;
       }
       if ($request->filled('paterno')) {
           $usuario->paterno = $request->paterno;
       }

       if ($request->filled('email')) {
           $usuario->email = $request->email;
       }

       if ($request->filled('telefono')) {
           $usuario->telefono = $request->telefono;
       }

       if ($request->filled('direccion')) {
           $usuario->direccion = $request->direccion;
       }

       if ($request->filled('sexo')) {
           $usuario->sexo = $request->sexo;
       }
       if ($request->hasFile('file')) {
        // Almacenar la imagen en la carpeta 'public/imagenesPerfil'
        $imagenes = $request->file('file')->store('public/imagenesPerfil');
        
        // Obtener la URL pública de la imagen almacenada
        $url = Storage::url($imagenes);
        
        // Asignar la URL al campo 'url' del usuario
        $usuario->url = $url;
        }
    

       // Guardar los cambios del usuario
       $usuario->save();

            // Buscar el artesano relacionado
        $artesano = Artesano::where('id_artesano', $user->id_usuario)->first();

        // Verificar si el artesano existe
        if (!$artesano) {
            return redirect()->back()->with('error', 'No se encontró el artesano.');
        }

        // Buscar la comunidad relacionada con el artesano
        $comunidad = Comunidad::find($artesano->id_comunidad);

        // Verificar si la comunidad existe
        if ($comunidad) {
            // Actualizar los datos de la comunidad solo si se proporcionaron
            if ($request->filled('nombreCo')) {
                $comunidad->nombreCo = $request->nombreCo;
            }
            if ($request->filled('ciudad')) {
                $comunidad->ciudad = $request->ciudad;
            }
            if ($request->filled(['nombreCo', 'ciudad'])) {
                $comunidad->ubicacionC = $request->nombreCo . ' ' . $request->ciudad;
            }
            // Guardar los cambios de la comunidad
            $comunidad->save();
        } else {
            return redirect()->back()->with('error', 'No se encontró la comunidad relacionada.');
        }

        // Actualizar los datos específicos del artesano
        if ($request->filled('especialidadA')) {
            $artesano->especialidadA = $request->especialidadA;
        }
        if ($request->filled('descripcionA')) {
            $artesano->descripcionA = $request->descripcionA;
        }
        if ($request->filled('calificacionA')) {
            $artesano->calificacionA = $request->calificacionA;
        }

        // Guardar los cambios del artesano
        $artesano->save();

        return redirect(route('PerfilUsuario'));

    }


}
