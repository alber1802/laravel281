<?php

namespace App\Http\Controllers;

use App\Models\Artesano;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Repartido;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Pedido;
use App\Models\Comunidad;

class CategoriaController extends Controller
{
    public function listar(){   
        $artesanos = Artesano::with('user', 'comunidad')->get();
        $clientes = Cliente::with('user')->get();
        $repartidores = Repartido::with('user', 'vehiculo')->get();
        $productos = Producto::with('categoria')->get();
        $categorias = Categoria::all();
        $pedidos = Pedido::all();
        $comunidads = Comunidad::all();
        //dd($artesanos);
        // Enviar todas las variables a la vista
        return view('Admin.Administracion', compact(
            'artesanos', 
            'clientes', 
            'repartidores', 
            'productos', 
            'categorias',
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
        $categorias = Categoria::get();
        return view('Admin.Administracion', compact('categorias'));
    }

    public function edit($id_categoria)
    {
        $categoria = Categoria::findOrFail($id_categoria);
        return view('Admin.EditarCategoria', compact('categoria'));
    } 

    public function update(Request $request, $id_categoria)
    {
        $categoria = categoria::findOrFail($id_categoria);

        $categoria->update([
            'nombreCa' => $request->nombreCa,
            'descripcionCa' => $request->descripcionCa,
        ]);
 
        return redirect()->route('Administrador.listar')->with('success', 'Categoria actualizada correctamente');
    }

    public function destroy($id_categoria)
    {
        $categoria = Categoria::where('id_categoria', $id_categoria)->firstOrFail();
        $categoria->delete();

        return redirect()->route('Administrador.listar')->with('success', 'Artesano eliminado correctamente');
    }

    public function registerC(Request $request)
    {  
        
        $categoria = new Categoria();
        $categoria->nombreCa = $request->nombreCa; 
        $categoria->descripcionCa = $request->descripcionCa;
        $categoria->save();
        //dd('Método liddhhhhdstaP fue llamado'); 
        return redirect()->route('PaginasHome.lisProductos')->with('success', 'Categoria creado con éxito.');

    } 

    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'nombreCa' => 'required|string|max:255',
            'descripcionCa' => 'required|string|max:255',
        ]);

        // Crear el nuevo artesano
        Categoria::create($validated);

        // Redireccionar con un mensaje de éxito
        return redirect()->route('Administrador.listar')->with('success', 'Artesano agregado exitosamente');
    }
}
