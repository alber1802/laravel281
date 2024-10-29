<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Incluye;
use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IncluyeController extends Controller
{
    public function listaPedidos()
    {   
        //dd('Método liddhhhhdstaP fue llamado'); 
        $datos = Incluye::with(['producto', 'carrito.cliente'])->get();
        return view('PaginasHome.lisPedidos', ['datos' => $datos]); 
    }


    public function ArtesanoPedidos()
    {   
        //dd('Método liddhhhhdstaP fue llamado'); 
        $datos = DB::select('
        SELECT c.*, p.* ,i.*,ped.*
        FROM productos p 
        JOIN incluyes i ON p.id_producto=i.id_producto 
        JOIN carritos c ON c.id_carrito=i.id_carrito 
         JOIN pedidos ped ON ped.id_carrito=c.id_carrito;
        ');
        return view('PaginasHome.lisPedidos', ['datos' => $datos]); 
    }
}
