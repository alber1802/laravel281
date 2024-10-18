<?php

namespace App\Http\Controllers;
use App\Models\Tarjeta;
use App\Models\Pago;
use Illuminate\Http\Request;

class TarjetaController extends Controller
{

    public function index()
    {
        return view('PaginasHome.tarjetamodel');
    }

    public function agregarTarjeta(Request $request)
    {

        $request->validate([
            'numero_cuenta' => 'required|string|max:19',
            'nombre_titular' => 'required|string|max:255',
            'fecha_expiracion' => 'required|string|max:7',
            'cvv' => 'required|string|max:3',
            'tipo' => 'required|string|max:50',
        ]);
        $pago = Pago::create([
            'id_cliente' => $request->input('id_cliente'),
            'tipo_metodo' => 'tarjeta', 
        ]);
        $tarjeta=new Tarjeta();
        $tarjeta->id_metodoP = $pago->id_metodoP; 
        $tarjeta->numero_cuenta = $request->input('numero_cuenta');
        $tarjeta->nombre_titular = $request->input('nombre_titular');
        $tarjeta->fecha_expiracion = $request->input('fecha_expiracion');
        $tarjeta->cvv = $request->input('cvv');
        $tarjeta->tipo = $request->input('tipo');
        $tarjeta->save();

        return redirect('/Lcarrito',)->with('success', 'Tarjeta creada exitosamente.');
    }   
    
}
