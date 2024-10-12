<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Incluye;
use App\Models\Cliente;

class CarritoController extends Controller
{
    public function listarProductos(){
        $productos = Producto::all();
        return view('PaginasHome.ListaDeseos', compact('productos')); 
    }

    
//crear carrito o agregar producto y actualizar cantidad
    public function agregarProducto(Request $request)
    {
    // Validar el ID del producto
    $request->validate([
        'id_producto' => 'required|exists:productos,id_producto',
    ]);

    //$id_cliente = session()->get('id_cliente');
    $id_cliente= Cliente::first()->id_cliente ?? null;

    // Obtener o crear el carrito para el cliente
    $carrito = Carrito::firstOrCreate(['id_cliente' => $id_cliente]);

    // Verificar si el producto ya está en el carrito del cliente
    $incluye = Incluye::where('id_carrito', $carrito->id_carrito)
                      ->where('id_producto', $request->id_producto)
                      ->first();
    if ($incluye) {
        $incluye -> cantidadPP += 1;
        $incluye -> save();
    } else {
        Incluye::create([
            'id_carrito' => $carrito->id_carrito,
            'id_producto' => $request->id_producto,
            'cantidadPP' => 1,
        ]);
    }

    return redirect()->back()->with('success', 'Producto agregado exitosamente.');
    }

    
}
