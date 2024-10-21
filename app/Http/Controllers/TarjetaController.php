<?php

namespace App\Http\Controllers;
use App\Models\Tarjeta;
use App\Models\Pago;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TarjetaController extends Controller
{

    public function index()
    {
        return view('PaginasHome.tarjetamodel');
    }


    public function agregarTarjeta(Request $request)
    {
      
        $request->validate([
            'nombre_titular' => 'required|string|max:255',
            'numero_cuenta' => 'required|string|min:19|max:19',
            'fecha_expiracion' => 'required|string',
            'cvv' => 'required|string|min:3|max:3',
            'tipo' => 'required|string',
        ]);
        // Obtener el pedido
        $pedido = Pedido::findOrFail($request->input('id_pedido'));

        $pago = Pago::create([
            'id_cliente' => $pedido->id_cliente,
            'id_pedido' => $pedido->id_pedido,
            'monto' => $pedido->total_pagar,
            'estado_pago' => 'cancelado', 
            'tipo_metodo' => 'tarjeta', 

        ]);
        
        // Encripta el CVV
        $cvvEncriptado = Crypt::encryptString($request->cvv);
        $fechaEncriptado = Crypt::encryptString($request->fecha_expiracion);
        $numeroCuentaEncriptado = substr(Crypt::encryptString($request->numero_cuenta), 0, 19);
        Tarjeta::create([
            'id_pago' => $pago->id_pago,
            'nombre_titular' => $request->nombre_titular,
            'numero_cuenta' => $numeroCuentaEncriptado, 
            'fecha_expiracion' => $fechaEncriptado,
            'cvv' => $cvvEncriptado,
            'tipo_tarjeta' => $request->tipo,
            'monto' => $pago->monto,
        ]);

        return redirect()->route('metodo.pago', ['id_pedido' => $pedido->id_pedido])
                 ->with('tarjeta_agregada', 'Tarjeta agregada correctamente.');
    }
    
}
