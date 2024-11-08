<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Incluye;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
class CarritoController extends Controller
{
   public function listaPedidos()
    {
    $usuario = Auth::user();
    $datos = DB::select('
        SELECT 
            
            (SELECT
                CONCAT(u.nombre, " ", u.paterno, " ", u.materno)
            FROM
                users u,
                clientes cl
            WHERE
                u.id_usuario = cl.id_cliente
                AND cl.id_cliente = c.id_usuario
            ) AS nombreCliente,
            SUM(CASE WHEN ped.estadoP = "Pendiente" THEN i.cantidadPP ELSE 0 END) AS cantidadPendiente,
            SUM(CASE WHEN ped.estadoP = "Terminado" THEN i.cantidadPP ELSE 0 END) AS cantidadTerminado, 
            c.id_usuario, u.direccion,u.telefono,u.email
        FROM 
        carritos c,publicas p,pedidos ped, incluyes i, users u
        WHERE 
            p.id_artesano = ? 
            AND p.id_producto = i.id_producto
            AND c.id_carrito = ped.id_carrito
            AND i.id_carrito = c.id_carrito
            AND u.id_usuario = c.id_usuario
        GROUP BY nombreCliente, c.id_usuario, u.direccion,u.telefono,u.email
        ORDER BY ped.fecha_pedido DESC;',  [$usuario->id_usuario]);


      return view('PaginasHome.lisPedidos', ['datos' => $datos]);
    }
    public function listaPedidosxCliente($id_cliente)
    {
        $usuario = Auth::user();
    DB::statement('SET SESSION sql_mode = ""');
    $datos = DB::select('
        SELECT 
            c.id_carrito,
            (SELECT CONCAT(u.nombre, " ", u.paterno, " ", u.materno)
            FROM users u, clientes cl
            WHERE u.id_usuario = cl.id_cliente 
            AND cl.id_cliente = c.id_usuario) AS nombreCliente,
            GROUP_CONCAT(
                (SELECT CONCAT(nombreP,": ",descripcionP) 
                FROM productos 
                WHERE id_producto = i.id_producto) 
                SEPARATOR "<br>") AS productos, 
            c.id_usuario,
            ped.fecha_pedido,
            ped.descuento,
            ped.estadoP
        FROM 
            carritos c, 
            incluyes i, 
            publicas p, 
            pedidos ped
        WHERE 
            p.id_artesano = ?
            AND c.id_usuario = ? 
            AND p.id_producto = i.id_producto 
            AND c.id_carrito = ped.id_carrito 
            AND ped.estadoP = "Pendiente" 
            AND i.id_carrito = c.id_carrito 
        GROUP BY 
            c.id_carrito, c.id_usuario, ped.fecha_pedido, ped.descuento, ped.estadoP
        ORDER BY 
            ped.fecha_pedido DESC', [$usuario->id_usuario,$id_cliente]);
        $cliente = $datos[0]->nombreCliente; 
    return view('PaginasHome.lisCarritos', ['datos' => $datos,'cliente'=>$cliente]);
}

public function listaPedidosxClienteA($id_cliente)
    {
        $usuario = Auth::user();
   DB::statement('SET SESSION sql_mode = ""');
    $datos = DB::select('
        SELECT 
    c.id_carrito,
    (SELECT CONCAT(u.nombre, " ", u.paterno, " ", u.materno)
     FROM users u, clientes cl
     WHERE u.id_usuario = cl.id_cliente 
     AND cl.id_cliente = c.id_usuario) AS nombreCliente,
    GROUP_CONCAT(
        (SELECT CONCAT(nombreP,": ",descripcionP) 
         FROM productos 
         WHERE id_producto = i.id_producto) 
        SEPARATOR "<br>") AS productos, 
    c.id_usuario,
    ped.fecha_pedido,
    ped.descuento,
    ped.estadoP
FROM 
    carritos c, 
    incluyes i, 
    publicas p, 
    pedidos ped
WHERE 
    p.id_artesano = ?
    AND c.id_usuario = ? 
    AND p.id_producto = i.id_producto 
    AND c.id_carrito = ped.id_carrito 
    AND ped.estadoP = "Terminado" 
    AND i.id_carrito = c.id_carrito 
GROUP BY 
    c.id_carrito, c.id_usuario, ped.fecha_pedido, ped.descuento, ped.estadoP
ORDER BY 
    ped.fecha_pedido DESC', [$usuario->id_usuario,$id_cliente]);
    $cliente = $datos[0]->nombreCliente; 
    return view('PaginasHome.lisCarritosA', ['datos' => $datos,'cliente'=>$cliente]);
}
    
    public function listaPedidosPendientes($id_carrito)
    {
        
        $usuario = Auth::user();
        //dd('Método liddhhhhdstaP fue llamado'); 
        $datos = DB::select('
        WITH TotalDescuentos AS (
            SELECT           
                c.id_usuario,CONCAT(u.nombre, " ", u.paterno, " ", u.materno) as nombreC,
    	u.direccion,ped.id_pedido, ped.fecha_pedido, ped.descuento, ped.estadoP,
                pr.nombreP,i.cantidadPP,pr.descripcionP, pr.precioP,
                ROUND((pr.precioP * i.cantidadPP), 2) AS total,
                ROUND((pr.precioP * i.cantidadPP) - (((pr.precioP * i.cantidadPP) * 10) / 100), 2) AS total_Descuento,
        c.id_carrito
            FROM 
                carritos c, publicas p, pedidos ped, incluyes i, productos pr,users u
            WHERE 
                p.id_artesano = ? 
               and c.id_usuario=u.id_usuario
                AND p.id_producto = i.id_producto
                AND pr.id_producto = i.id_producto
                AND c.id_carrito = ped.id_carrito 
                AND ped.estadoP = "Pendiente" 
                AND ped.id_carrito = ?
                AND i.id_carrito = c.id_carrito
        )
        SELECT 
            id_usuario,
    nombreC,direccion,id_pedido,fecha_pedido, descuento, estadoP, nombreP, cantidadPP, descripcionP, precioP,total,total_Descuento,SUM(total_Descuento) OVER (PARTITION BY id_usuario ORDER BY fecha_pedido) AS totalP
    FROM 
        TotalDescuentos;', [$usuario->id_usuario, $id_carrito]);
        $totalP = $datos[0]->totalP; 
        $fechaP= $datos[0]->fecha_pedido; 
        $nombreC= $datos[0]->nombreC;
        $direccionC= $datos[0]->direccion; 
        $repartidores = DB::select('
        SELECT u.nombre,u.paterno,u.materno,id_usuario,id_repartidor
        FROM users u
        JOIN repartidos r ON u.id_usuario =r.id_repartidor');


        return view('PaginasHome.listPedidosPendientes', ['datos' => $datos,'repartidores' => $repartidores,'totalP'=>$totalP,'fechaP'=>$fechaP,'nombreC' => $nombreC,'direccionC'=>$direccionC]);
    }

    public function listaPedidosAnteriores($id_carrito)
    {
        $usuario = Auth::user();
        $datos = DB::select('
            WITH TotalDescuentos AS (
                SELECT 
                    c.id_usuario,CONCAT(u.nombre, " ", u.paterno, " ", u.materno) as nombreC,
                    u.direccion,ped.id_pedido, ped.fecha_pedido, ped.descuento, ped.estadoP,
                    pr.nombreP,i.cantidadPP,pr.descripcionP, pr.precioP,
                    ROUND((pr.precioP * i.cantidadPP), 2) AS total,
                    ROUND((pr.precioP * i.cantidadPP) - (((pr.precioP * i.cantidadPP) * 10) / 100), 2) AS total_Descuento,
                    c.id_carrito
                FROM 
                    carritos c, publicas p, pedidos ped, incluyes i, productos pr,users u
                WHERE 
                    p.id_artesano = ? 
                    and c.id_usuario=u.id_usuario
                    AND p.id_producto = i.id_producto
                    AND pr.id_producto = i.id_producto
                    AND c.id_carrito = ped.id_carrito 
                    AND ped.estadoP = "Terminado" 
                    AND ped.id_carrito = ?
                    AND i.id_carrito = c.id_carrito
            )
            SELECT 
                    id_usuario, nombreC, direccion,id_pedido,fecha_pedido, descuento, estadoP, nombreP, cantidadPP, descripcionP, precioP,total,total_Descuento,SUM(total_Descuento) OVER (PARTITION BY id_usuario ORDER BY fecha_pedido) AS totalP
            FROM 
                TotalDescuentos;', [$usuario->id_usuario, $id_carrito]);


            $totalP = $datos[0]->totalP; 
            $fechaP= $datos[0]->fecha_pedido; 
            $nombreC= $datos[0]->nombreC;

       
           
       
            $datos2 = DB::selectOne('
                    SELECT e.*,CONCAT(u.name, " ", u.paterno, " ", u.materno) as NombreR
                    FROM pedidos pe 
                    join  incluyes i on i.id_carrito= ? 
                    join publicas pu on pu.id_producto= i.id_producto 
                    join entregas e on e.id_pedido=pe.id_pedido
                    join users u on u.id_usuario=e.id_repartidor
                    WHERE pu.id_artesano = ?
    
            
            ', [ $id_carrito,$usuario->id_usuario]);    
           // dd($datos2);
    
        return view('PaginasHome.lisPedidosAnteriores', ['datos' => $datos,'totalP'=>$totalP,'fechaP'=>$fechaP,'nombreC' => $nombreC,'datos2'=>$datos2]);
    }
    
    public function listarProductos(){
        $productos = Producto::all();
        return view('PaginasHome.ListaDeseos', compact('productos')); 
    }

    public function Catalogo(){
        $productos = Producto::all();
        return view('PaginasHome.Catalogo', compact('productos')); 
    }  
    
    
    //crear carrito o agregar producto y actualizar cantidad
    public function agregarProducto(Request $request)
    {
        $usuario = Auth::user();
        $id_cliente= $usuario->id_usuario;

        $request->validate([
            'id_producto' => 'required|exists:productos,id_producto',
        ]);

        //$id_cliente = session()->get('id_cliente');
        

        // Obtener o crear el carrito para el cliente
        $carrito = Carrito::firstOrCreate(['id_usuario' => $id_cliente]);

        // Verificar si el producto ya está en el carrito del cliente
        $incluye = Incluye::where('id_carrito', $carrito->id_carrito)
                        ->where('id_producto', $request->id_producto)
                        ->first();
        if ($incluye) {
            $incluye -> cantidadPP += 1;
            $incluye -> save();
        } else {
            Incluye::create([
                'id_carrito' => $carrito->id_carrito,
                'id_producto' => $request->id_producto,
                'cantidadPP' => 1,
            ]);
        }
     return back()->with('agregar_producto', 'Producto agregado exitosamente.');
    }


    

    public function mostrarCarrito()
    {
        $usuario = Auth::user();
        $id_cliente= $usuario->id_usuario;

        $carrito = Carrito::where('id_usuario', $id_cliente)->first();

         //si esta vacio
        
        if (!$carrito) {
            return back()->with('carrito_vacio', 'Tu carrito está vacío.');


        }else{

            // Obtener los productos del carrito
            $productos = Incluye::where('id_carrito', $carrito->id_carrito)
            ->with('producto') 
            ->get();
            return view('PaginasHome.Carrito', ['productos' => $productos]);
        }
    }

    public function eliminar($id_producto)
    {
        $usuario = Auth::user();
        $id_cliente= $usuario->id_usuario;

        $carrito = Carrito::where('id_usuario', $id_cliente)->first();

        if (!$carrito) {
            return redirect()->back()->with('error', 'No hay carrito disponible.');
        }

        $deleted = Incluye::where('id_carrito', $carrito->id_carrito)
                        ->where('id_producto', $id_producto)
                        ->delete();

        if ($deleted) {

            return redirect()->back()->with('eliminado_carrito', 'Producto eliminado del carrito.');
        } else {

            return redirect()->back()->with('eliminado_error', 'Producto no encontrado en el carrito.');
       }
    }

        // Método para actualizar la cantidad del producto en el carrito
        public function updateQuantity(Request $request)
        {
            // Validar la solicitud
            $validated = $request->validate([
                'id' => 'required|integer',
                'quantity' => 'required|integer|min:0',
            ]);
    
            // Buscar el producto en la base de datos
            $item = Incluye::where('id_producto', $validated['id'])->first();
    
            // Verificar si el producto existe
            if ($item) {
                $item->cantidadPP = $validated['quantity']; 
                $item->save(); 
                return response()->json(['success' => true, 'quantity' => $item->cantidadPP]);
            }
    
            return response()->json(['success' => false, 'message' => 'Producto no encontrado'], 404);
        }


    
}







    

