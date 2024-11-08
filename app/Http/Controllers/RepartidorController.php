<?php

namespace App\Http\Controllers;
use App\Models\Entrega;
use App\Models\Repartido;
use App\Models\Pedido;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RepartidorController extends Controller
{
    public function listaRepartidor()
    {   
        $datos = DB::select(
            'select DISTINCT (e.id_pedido), e.fecha_entrega, e.costo_entrega, p.id_usuario
             from entregas e
             join pedidos p on e.id_pedido=p.id_pedido
             join repartidos r on e.id_repartidor=r.id_repartidor and r.id_repartidor=12');

        return view('PaginasHome.repartidores', ['datos' => $datos]); 
    }
    public function PedidoR(){

        $usuario = Auth::user();
        $datos = DB::select(
            'SELECT e.*,
                u.name,u.paterno,u.materno,u.email,u.telefono,u.direccion,
                p.nombreP,p.descripcionP,p.descuentoP,p.materialP,p.colorP,p.tipoP,p.tiempoEntrega,p.precioP 
                ,i.cantidadPP
                ,pe.estadoP,pe.fecha_pedido
            FROM entregas e 
            JOIN pedidos pe ON pe.id_pedido = e.id_pedido 
            JOIN carritos ca ON ca.id_carrito = pe.id_carrito
            JOIN users u ON u.id_usuario = pe.id_usuario
            JOIN incluyes i ON i.id_carrito = pe.id_carrito
            JOIN productos p ON p.id_producto = i.id_producto
            WHERE e.id_repartidor = ?', [$usuario->id_usuario]
        );
               // dd($datos);
        return view('PaginasHome.RepartidorPedidos', ['datos' => $datos]); 
        
    }

    
    
}
