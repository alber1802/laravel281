<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Incluye;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function ventasSemanales()
    { 
    
        $datos = DB::selectOne('
        SELECT 
            DATE_FORMAT(ped.fecha_pedido, "%Y-%u") AS semana, 
            SUM(p.precioP * i.cantidadPP) AS ventasSemanales
        FROM 
            pedidos ped, carritos c,  incluyes i, productos p
        WHERE 
            c.id_carrito = ped.id_carrito 
            AND i.id_carrito = c.id_carrito 
            AND i.id_producto = p.id_producto
            AND YEARWEEK(ped.fecha_pedido, 1) = YEARWEEK(CURDATE() - INTERVAL 1 WEEK, 1)
        GROUP BY semana
        ORDER BY semana;');
        
        $datos2 = DB::selectOne('
        SELECT 
    DATE_FORMAT(ped.fecha_pedido, "%Y-%m-%d") AS fecha, 
    IFNULL(SUM(p.precioP * i.cantidadPP), 0) AS ventasDiarias
FROM 
    (SELECT CURDATE() - INTERVAL 1 DAY AS fecha_pedido) AS fechas
LEFT JOIN pedidos ped ON DATE(ped.fecha_pedido) = fechas.fecha_pedido
LEFT JOIN carritos c ON c.id_carrito = ped.id_carrito
LEFT JOIN incluyes i ON i.id_carrito = c.id_carrito
LEFT JOIN productos p ON i.id_producto = p.id_producto
WHERE 
    fechas.fecha_pedido = CURDATE() - INTERVAL 1 DAY
GROUP BY fecha
ORDER BY fecha;

        ');


        $datos3 = DB::selectOne('
        SELECT 
            DATE_FORMAT(ped.fecha_pedido, "%Y-%m-%d") AS fecha, 
            SUM(p.precioP * i.cantidadPP) AS ventasMensuales
        FROM 
            pedidos ped,carritos c, incluyes i, productos p
        WHERE 
            c.id_carrito = ped.id_carrito 
            AND i.id_carrito = c.id_carrito 
            AND i.id_producto = p.id_producto
            AND MONTH(ped.fecha_pedido) = MONTH(CURDATE() - INTERVAL 1 MONTH)
            AND YEAR(ped.fecha_pedido) = YEAR(CURDATE() - INTERVAL 1 MONTH)
        GROUP BY fecha
        ORDER BY fecha');
        
        DB::statement('SET SESSION sql_mode = ""');
        $productos = DB::select('
        SELECT p.nombreP,p.precioP,p.imgP,imgP2,imgP3,SUM(i.cantidadPP) AS totalVentas, SUM(i.cantidadPP*p.precioP) as totalgenerado
        FROM incluyes i
        JOIN productos p ON i.id_producto = p.id_producto
        GROUP BY i.id_producto ORDER BY totalVentas DESC LIMIT 3;');

        $pedidos = DB::select('
        SELECT estadoP,COUNT(*) AS total FROM pedidos GROUP BY estadoP;');

        $stock = DB::select('
        SELECT 
            COUNT(CASE WHEN stock > 0 THEN 1 END) AS productosEnStock,
            COUNT(CASE WHEN stock = 0 THEN 1 END) AS productosAgotados,
            COUNT(CASE WHEN stock < 10 THEN 1 END) AS productosCasiAgotados
        FROM productos;
        ');
        return view('PaginasHome.dashboard', [
            'datos' => $datos->ventasSemanales,
            'datos2' => $datos2->ventasDiarias,
            'datos3' => $datos3->ventasMensuales,
            'productos' => $productos,
            'pedidos' => $pedidos,
        'stock' => $stock]);
        
    }


}
