<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Publica;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Artesano;
use Illuminate\Support\Facades\DB;
class PublicaController extends Controller

{

    public function artesanoP()
    {
        $usuario = Auth::user();


        $cont = DB::select('
        SELECT 
            (SELECT
                CONCAT(u.nombre, u.paterno, u.materno)
            FROM
                users u,
                clientes cl
            WHERE
                u.id_usuario = cl.id_cliente
                AND cl.id_cliente = c.id_cliente
                ) AS nombreCliente,
            SUM(i.cantidadPP) AS cantidadSuma 
        FROM 
            publicas p, carritos c, pedidos ped, incluyes i
        WHERE 
            p.id_artesano = ? 
            AND p.id_producto=i.id_producto
            AND c.id_carrito=ped.id_carrito
            and i.id_carrito=c.id_carrito 
            and ped.estadoP="Pendiente" 
        GROUP BY nombreCliente
        ORDER BY ped.fecha_pedido DESC;', [$usuario->id_usuario]);
        //dd($usuario->id_usuario); 
        
        $datos = Publica::with(['productos', 'artesano.user'])->where('id_artesano', $usuario->id_usuario)->get();

        $artesano = Artesano::with('user')->findOrFail($usuario->id_usuario);
        $cantidad= Publica::where('id_artesano', $usuario->id_usuario)->count();

        return view('PaginasHome.lisPublica', ['datos' => $datos, 'artesano' => $artesano,'cont' =>  $cont,'cantidad'=>$cantidad]);
    }


    public function artesanoPP($id)
{
    
        // Traemos las publicaciones con los productos y sus categorías
        $datos = Publica::with(['producto.categoria'])
            ->where('id_artesano', $id)
            ->get();
    
        $artesano = Artesano::with('user')->findOrFail($id);
       // dd($datos);
    
        return view('PaginasHome.lisPublica', [
            'datos' => $datos,
            'artesano' => $artesano
        ]);
    }
    
    


}
