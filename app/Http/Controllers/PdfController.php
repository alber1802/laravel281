<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Incluye;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function generarOrden($id_carrito, $id_artesano)
        {

             $datos = DB::select('CALL obtenerDetallesEntrega(?,?)',[$id_artesano, $id_carrito]);

         if (!empty($datos)) {
        $costo = $datos[0]; 
        $direccion = $datos[0];
        $fecha = $datos[0];
        $estado = $datos[0];
        $tipo = $datos[0];
        $tipo = $datos[0];
        $nombre_repartidor = $datos[0];
        $nombre_cliente = $datos[0];
         }else {
            // Maneja el caso en que no hay datos
            return view('PaginasHome.lisPedidosAnteriores')->with('error', 'No se encontraron pedidos anteriores.');
        }
        $totalPagar = DB::select('
        SELECT ROUND(SUM((p.precioP * i.cantidadPP) - (((p.precioP * i.cantidadPP) * 10) / 100)), 2) AS totalPagar
        FROM productos p
        JOIN publicas pub ON p.id_producto = pub.id_producto
        JOIN incluyes i ON p.id_producto = i.id_producto
        JOIN carritos c ON c.id_carrito = i.id_carrito
        JOIN clientes cli ON cli.id_cliente = c.id_cliente
        JOIN users u ON cli.id_cliente = u.id_usuario
        JOIN pedidos ped ON ped.id_carrito = c.id_carrito
        WHERE pub.id_artesano = ? AND c.id_carrito = ? AND ped.estadoP = "Terminado"', 
        [$id_artesano, $id_carrito]);
        $totalPagar = $totalPagar[0]->totalPagar;

    
            $pdf=PDF::loadView('PaginasHome.lisPedidosAnteriores', ['datos' => $datos,'costo'=>$costo,'direccion'=>$direccion,'fecha'=>$fecha,'estado'=>$estado,'tipo'=>$tipo,'nombre_repartidor'=>$nombre_repartidor,'nombre_cliente'=>$nombre_cliente,'totalPagar'=>$totalPagar]);

            return $pdf->download('documento.pdf');
        }
    
}
