<?php

namespace App\Http\Controllers;
use App\Models\Pago;
use App\Models\Qr;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QrController extends Controller
{
    //
    public function crearQr(Request $request){

        // Obtener el pedido
        $pedido = Pedido::findOrFail($request->input('id_pedido'));
        //dd($pedido->toArray());
        $pago = Pago::create([
            'id_usuario' => $pedido->id_usuario,
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
