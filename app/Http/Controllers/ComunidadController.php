<?php

namespace App\Http\Controllers;

use App\Models\Artesano;
use Illuminate\Http\Request;
use App\Models\Repartido;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Pedido;
use App\Models\Comunidad;

class ComunidadController extends Controller
{
    public function listar(){   
        $artesanos = Artesano::with('user', 'comunidad')->get();
        $clientes = Cliente::with('user')->get();
        $repartidores = Repartido::with('user', 'vehiculo')->get();
        $productos = Producto::with('comunidad')->get();
        $comunidads = comunidad::all();
        $pedidos = Pedido::all();
        $comunidads = Comunidad::all();
        //dd($artesanos);
        // Enviar todas las variables a la vista
        return view('Admin.Administracion', compact(
            'artesanos', 
            'clientes', 
            'repartidores', 
            'productos', 
            'comunidads',
            'pedidos',
            'comunidads'
        ));
    }

    public function listaArt()
    {
        $datos = Artesano::with('user', 'comunidad')->get();
        return view('PaginasHome.lisArtesano', ['datos' => $datos]);
    }

    public function index()
    {
        $comunidads = Comunidad::get();
        return view('Admin.Administracion', compact('comunidads'));
    }

    public function edit($id_comunidad)
    {
        $comunidad = Comunidad::findOrFail($id_comunidad);
        return view('Admin.EditarComunidad', compact('comunidad'));
    } 

    public function update(Request $request, $id_comunidad)
    {
        $comunidad = Comunidad::findOrFail($id_comunidad);

        $comunidad->update([
            'nombreCo' => $request->nombreCo,
            'ciudad' => $request->ciudad,
            'ubicacionC' => $request->ubicacionC,
        ]);
 
        return redirect()->route('Administrador.listar')->with('success', 'Comunidad actualizada correctamente');
    }

    public function destroy($id_comunidad)
    {
        $comunidad = Comunidad::where('id_comunidad', $id_comunidad)->firstOrFail();
        $comunidad->delete();

        return redirect()->route('Administrador.listar')->with('success', 'Comunidad eliminado correctamente');
    }

    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'nombreCo' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'ubicacionC' => 'required|string|max:255',
        ]);

        // Crear el nuevo artesano
        Comunidad::create($validated);

        // Redireccionar con un mensaje de éxito
        return redirect()->route('Administrador.listar')->with('success', 'Comunidad agregada exitosamente');
    }
}
