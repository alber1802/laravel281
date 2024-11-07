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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CategoriaController extends Controller
{
    public function listaClientes()
    {
        $usuario = Auth::user();
        DB::statement('SET SESSION sql_mode = ""');
        $datos = DB::select('
        SELECT 
   CONCAT(u.nombre, " ", u.paterno, " ", u.materno) AS nombreCliente, 2024-EXTRACT(YEAR FROM u.fecha_nacimiento) AS edad , u.*, cli.preferencia
FROM 
    carritos c, incluyes i, publicas p,users u, clientes cli
WHERE 
    p.id_artesano = ?
    AND p.id_producto = i.id_producto 
    AND i.id_carrito = c.id_carrito 
    AND c.id_usuario=cli.id_cliente
    AND cli.id_cliente=u.id_usuario GROUP BY nombreCliente
;', [$usuario->id_usuario]); 
        return view('PaginasHome.lisClientes', ['datos' => $datos]);
    }
    public function categoriaP()
    {
        $usuario = Auth::user();
        $datos = DB::select('
        SELECT c.*
        from categorias c;'); 
        return view('PaginasHome.lisCategoria', ['datos' => $datos]);
    }
    public function editarCa(Request $request,$id)
    {
        $validatedData = $request->validate([
          
            'nombreCa' => 'required|string|max:255',
            'descripcionCa' => 'required|string',
             
        ]);
        $categoria = Categoria::find($id);
        $categoria->nombreCa = $request->nombreCa; 
        $categoria->descripcionCa = $request->descripcionCa;

        $categoria->save();
        
        return back()->with('success', 'Producto creado con éxito.');
    } 
    public function eliminarCa($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return back()->with('success', 'Producto creado con éxito.');
    }
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
        return back()->with('success', 'categoria creado con éxito.');
        //return redirect()->route('PaginasHome.lisProductos')->with('success', 'Categoria creado con éxito.');

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
