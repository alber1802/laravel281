<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\Pago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class PedidoController extends Controller
{
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
