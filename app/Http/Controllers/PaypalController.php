<?php
namespace App\Http\Controllers;
use App\Models\Pago;
use App\Models\Paypal;
use App\Models\Pedido;

use Illuminate\Http\Request;

class PaypalController extends Controller
{
    //

    public function agregarPaypal(Request $request)
{
    $request->validate([
        'correo' => 'required|email',
        'tipo_pago' => 'required|string',
        'monto' => 'required|numeric',
        'id_pedido' => 'required|exists:pedidos,id_pedido',
    ]);

    // Obtener el pedido
    $pedido = Pedido::findOrFail($request->input('id_pedido'));

    // Crear el registro de pago
    $pago = Pago::create([
        'id_usuario' => $pedido->id_usuario,
        'id_pedido' => $pedido->id_pedido,
        'monto' => $pedido->total_pagar,
        'estado_pago' => 'pendiente',
        'tipo_metodo' => 'paypal',
    ]);
    
    // Guardar en la tabla de PayPa
    Paypal::create([
        'id_pago' => $pago->id_pago,
        'correo' => $request->correo,
        'tipo_tarjeta' => $request->tipo_pago,
        'monto' => $pago->monto,
    ]);


    return redirect()->route('metodo.pago', ['id_pedido' => $pedido->id_pedido])
                     ->with('paypal_agregado', 'Pago realizado correctamente.');
}

}
