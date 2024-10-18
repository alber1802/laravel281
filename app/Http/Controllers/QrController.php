<?php

namespace App\Http\Controllers;
use App\Models\Pago;
use App\Models\Qr;
use Illuminate\Http\Request;

class QrController extends Controller
{
    //
    public function crearQr(Request $request){

        $pago = Pago::create([
            'id_cliente' => $request->input('id_cliente'),
            'tipo_metodo' => 'Qr', 
        ]);
        $number=mt_rand(1000000000,9999999999);
        if($this->pagoQrExists($number)){

            $number=mt_rand(1000000000,9999999999);
        }
        
        $qr=Qr::create([
            'id_metodoP' => $pago->id_metodoP, 
            'pago_codigo' => $number,
        ]);

        return view('PaginasHome.qr', ['qr' => $qr]);
        
    }

    public function pagoQrExists($number){
        return Qr::where('pago_codigo', $number)->exists();
    }
}
