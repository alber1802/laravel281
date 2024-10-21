<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
class PagoController extends Controller
{
    //

    public function mostrarMetodos($id_pedido)
    {
        $pedido = Pedido::findOrFail($id_pedido);

        return view('PaginasHome.MetodoPago', compact('pedido'));
    }

    
}
