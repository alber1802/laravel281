<?php

namespace App\Http\Controllers;
use App\Models\Entrega;
use App\Models\Repartido;
use App\Models\Pedido;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RepartidorController extends Controller
{
    public function listaRepartidor()
    {   
        $datos = DB::select('select DISTINCT (e.id_pedido), e.fecha_entrega, e.costo_entrega, p.id_cliente from entregas e join pedidos p on e.id_pedido=p.id_pedido join repartidos r on e.id_repartidor=r.id_repartidor and r.id_repartidor=12');

        return view('PaginasHome.repartidores', ['datos' => $datos]); 
    }
    
}
