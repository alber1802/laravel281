<?php

namespace App\Http\Controllers;
use App\Models\Pago;
use App\Models\Qr;
use App\Models\Pedido;
use Illuminate\Http\Request;

class QrController extends Controller
{
    //
    public function crearQr(Request $request){

        // Obtener el pedido
        $pedido = Pedido::findOrFail($request->input('id_pedido'));

        $pago = Pago::create([
            'id_cliente' => $pedido->id_cliente,
            'id_pedido' => $pedido->id_pedido,
            'monto' => $pedido->total_pagar,
            'estado_pago' => 'cancelado', 
            'tipo_metodo' => 'tarjeta', 

        ]);

        $number=mt_rand(1000000000,9999999999);
        if($this->pagoQrExists($number)){

            $number=mt_rand(1000000000,9999999999);
        }
        
        $qr=Qr::create([
            'id_pago' => $pago->id_pago, 
            'pago_codigo' => $number,
            'monto' => $pago->monto,
        ]);

        return view('PaginasHome.qr', ['qr' => $qr]);
        
    }

    public function pagoQrExists($number){
        return Qr::where('pago_codigo', $number)->exists();
    }
}
