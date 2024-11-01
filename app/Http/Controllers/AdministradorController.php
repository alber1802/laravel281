<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Artesano;
use App\Models\Repartido;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Pedido;
use App\Models\Comunidad;


class AdministradorController extends Controller
{
    public function listar(){   
        $artesanos = Artesano::with('user', 'comunidad')->get();
        $clientes = Cliente::with('user')->get();
        $repartidos = Repartido::with('user', 'vehiculo')->get();
        $productos = Producto::with('categoria')->get();
        $categorias = Categoria::all();
        $pedidos = Pedido::all();
        $comunidads = Comunidad::all();
        //dd($artesanos);
        // Enviar todas las variables a la vista
        return view('Admin.Administracion', compact(
            'artesanos', 
            'clientes', 
            'repartidos', 
            'productos', 
            'categorias',
            'pedidos',
            'comunidads'
        ));
    }

}
