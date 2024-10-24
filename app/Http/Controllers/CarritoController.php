<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Incluye;
use App\Models\Cliente;

class CarritoController extends Controller
{

    public function Catalogo(){
        $productos = Producto::all();
        return view('PaginasHome.Catalogo', compact('productos')); 
    }  
    
    
    //crear carrito o agregar producto y actualizar cantidad
    public function agregarProducto(Request $request)
    {
        $usuario = Auth::user();
        $id_cliente= $usuario->id_usuario;

        $request->validate([
            'id_producto' => 'required|exists:productos,id_producto',
        ]);

        //$id_cliente = session()->get('id_cliente');
        

        // Obtener o crear el carrito para el cliente
        $carrito = Carrito::firstOrCreate(['id_usuario' => $id_cliente]);

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


     return back()->with('agregar_producto', 'Producto agregado exitosamente.');
    }


    

    public function mostrarCarrito()
    {
        $usuario = Auth::user();
        $id_cliente= $usuario->id_usuario;

        $carrito = Carrito::where('id_usuario', $id_cliente)->first();

         //si esta vacio
        
        if (!$carrito) {
            return back()->with('carrito_vacio', 'Tu carrito está vacío.');


        }else{

            // Obtener los productos del carrito
            $productos = Incluye::where('id_carrito', $carrito->id_carrito)
            ->with('producto') 
            ->get();
            return view('PaginasHome.Carrito', ['productos' => $productos]);
        }
    }

    public function eliminar($id_producto)
    {
        $usuario = Auth::user();
        $id_cliente= $usuario->id_usuario;

        $carrito = Carrito::where('id_usuario', $id_cliente)->first();

        if (!$carrito) {
            return redirect()->back()->with('error', 'No hay carrito disponible.');
        }

        $deleted = Incluye::where('id_carrito', $carrito->id_carrito)
                        ->where('id_producto', $id_producto)
                        ->delete();

        if ($deleted) {

            return redirect()->back()->with('eliminado_carrito', 'Producto eliminado del carrito.');
        } else {

            return redirect()->back()->with('eliminado_error', 'Producto no encontrado en el carrito.');
       }
    }

        // Método para actualizar la cantidad del producto en el carrito
        public function updateQuantity(Request $request)
        {
            // Validar la solicitud
            $validated = $request->validate([
                'id' => 'required|integer',
                'quantity' => 'required|integer|min:0',
            ]);
    
            // Buscar el producto en la base de datos
            $item = Incluye::where('id_producto', $validated['id'])->first();
    
            // Verificar si el producto existe
            if ($item) {
                $item->cantidadPP = $validated['quantity']; 
                $item->save(); 
                return response()->json(['success' => true, 'quantity' => $item->cantidadPP]);
            }
    
            return response()->json(['success' => false, 'message' => 'Producto no encontrado'], 404);
        }


    
}







    

