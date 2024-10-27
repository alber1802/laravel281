<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\Pago;
use App\Models\Carrito;
use App\Models\Incluye;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class PedidoController extends Controller
{

    
    public function detalles($id_pedido)
    {
        // Obtener el pedido
        $pedido = Pedido::with('user')->findOrFail($id_pedido);

        // Obtener los productos del carrito relacionado al pedido
        $productos = Incluye::where('id_carrito', $pedido->id_carrito)
            ->with('producto')
            ->get();

        return view('PaginasHome.Pedido', compact('pedido','productos'));
    }

    public function crearPedido(Request $request)
    {
        $usuario = Auth::user();

        $request->validate([
            'id_carrito' => 'required|exists:carritos,id_carrito',
        ]);

        // Obtener el carrito
        $carrito = Carrito::find($request->id_carrito);

        // Obtener los productos del carrito
        $productos = Incluye::where('id_carrito', $carrito->id_carrito)
            ->with('producto') 
            ->get();
        // Calcular el total a pagar y el total de descuento
        $totalPagar = 0;
        $totalDescuento = 0;

        foreach ($productos as $incluye) {
            $cantidad = $incluye->cantidadPP; 
            $precioUnitario = $incluye->producto->precioP;
            $descuentoUnitario = $incluye->producto->descuentoP; 

            $subtotal = $cantidad * $precioUnitario;
            $totalPagar += $subtotal;

            // Calcular descuento   
            $descuentoAplicable = $cantidad * $descuentoUnitario; 
            $totalDescuento += $descuentoAplicable;
        }

        // Calcular total a pagar después del descuento  
        $totalPagar -= $totalDescuento;

        $pedido = new Pedido();
        $pedido->total_pagar = $totalPagar; 
        $pedido->fecha_pedido = now(); 
        $pedido->estadoP = 'Pendiente';
        $pedido->descuento = $totalDescuento;
        $pedido->id_carrito = $carrito->id_carrito;
        $pedido->id_usuario = $carrito->id_usuario; 
        $pedido->save();
        // Redirigir a la página de detalles del pedido usando el id_pedido
        return redirect()->action([PedidoController::class, 'detalles'], ['id_pedido' => $pedido->id_pedido]);
    }

    public function cancelar($id_pedido)
    {

        $pedido = Pedido::findOrFail($id_pedido);

        if (!$pedido) {
            return redirect()->route('carrito.mostrar')->with('pedido_warning', 'El pedido no existe.');
        }else{

            $pedido->delete();
            return redirect()->route('carrito.mostrar')->with('pedido_eliminado', 'Pedido cancelado exitosamente.');
        }

    }

    public function agregarPedido(Request $request)
    {
        
        $id_cliente = $request->input('id_cliente');
        $pago = Pago::where('id_cliente', $id_cliente)->latest()->first();

        $request->validate([
            'total_pagar' => 'required|numeric',
            'descuento' => 'nullable|numeric',
            'fecha_pedido' => 'required|date',
            'estadoP' => 'required|string',
        ]);

        $pedido = new Pedido();
        $pedido->total_pagar = $request->input('total_pagar');
        $pedido->descuento = $request->input('descuento', 0); 
        $pedido->fecha_pedido = $request->input('fecha_pedido'); 
        $pedido->estadoP = $request->input('estadoP');
        $pedido->id_carrito = $request->input('id_carrito');
        $pedido->id_cliente = $request->input('id_cliente');
        $pedido->id_metodoP = $pago->id_metodoP; 
        $pedido->save();

        return redirect('/Lcarrito',)->with('success', 'Pedido creado exitosamente.');
        
    }
    
}
