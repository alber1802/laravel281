<?php
namespace App\Http\Controllers;
use App\Models\Pago;
use App\Models\Paypal;


use Illuminate\Http\Request;

class PaypalController extends Controller
{
    //

    public function agregarPaypal(Request $request)
    {
        $request->validate([
            'correo' => 'required|email|max:255',
            'contraseña' => 'required|string|max:255', 
            'tipo_pago' => 'required|string|max:50',
            'monto' => 'required|numeric',
        ]);


        $pago = Pago::create([
            'id_cliente' => $request->input('id_cliente'),
            'tipo_metodo' => 'paypal',
        ]);


        $paypal = new Paypal();
        $paypal->id_metodoP = $pago->id_metodoP; 
        $paypal->correo = $request->input('correo');
        $paypal->contraseña = bcrypt($request->input('contraseña'));
        $paypal->tipo_pago = $request->input('tipo_pago');
        $paypal->monto = $request->input('monto');
        $paypal->save();

        return redirect('/Lcarrito')->with('success', 'Método de pago PayPal agregado exitosamente.');
    }

}
