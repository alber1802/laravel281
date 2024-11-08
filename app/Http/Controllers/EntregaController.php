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


    public function PedidosR()
    {
        $usuario= Auth::user();
        
        $pedidos = db::select('SELECT  
                            pe.id_usuario,
                            pe.total_pagar, 
                            pe.fecha_pedido,
                            pe.estadoP,
                            pe.descuento,
                            pe.created_at,
                            i.cantidadPP,
                            pr.*, 
                            ca.nombreCa,
                            ca.descripcionCa,
                            concat(u.name ," ",
                            u.paterno," " ,
                            u.materno) as nombreCompleto,
                            u.email,
                            en.estado_entrega

                        FROM 
                            pedidos pe 
                        JOIN 
                            incluyes i  on i.id_carrito=pe.id_carrito
                        JOIN 
                            productos pr ON pr.id_producto = i.id_producto
                        JOIN 
                            categorias ca ON ca.id_categoria = pr.id_categoria  
                        JOIN 
                            publicas pu ON pu.id_producto = i.id_producto
                        JOIN 
                            artesanos a ON a.id_artesano = pu.id_artesano
                        JOIN 
                            users u ON u.id_usuario = a.id_artesano
                        JOIN 
	                        entregas en on en.id_pedido = pe.id_pedido
                            
                        WHERE pe.id_usuario =?', [$usuario->id_usuario]
                        );
         return view('PaginasHome.PedidosUses', ['pedidos' => $pedidos]); 
    }
 
}
