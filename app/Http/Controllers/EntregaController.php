<?php

namespace App\Http\Controllers;
use App\Models\Entrega;
use App\Models\Repartidor;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
class EntregaController extends Controller
{
    public function registerE(Request $request){
        $entregas = new Entrega();

        $entregas ->costo_entrega= $request->costo_entrega;
        $entregas ->fecha_entrega= $request->fecha_entrega;
        $entregas ->direccion_entrega= $request->direccion_entrega;
        $entregas ->estado_entrega= $request->estado_entrega;
        $entregas ->tipo_entrega= $request->tipo_entrega;
        $entregas ->id_pedido= $request->id_pedido;
        $entregas ->id_repartidor= $request->id_repartidor;
        $entregas ->latitud= $request->latitud;
        $entregas ->longitud= $request->longitud;
        $entregas ->created_at= now();;
        $entregas ->updated_at= now();;
       
        DB::update('
        UPDATE pedidos SET estadoP = "Terminado" WHERE id_pedido = ?', [$request->id_pedido]);       
        $entregas ->save();

        return redirect()->route('PaginasHome.lisPedidosPxC');
    }
 
}
