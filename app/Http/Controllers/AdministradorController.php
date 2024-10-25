<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Artesano;
use App\Models\Repartido;
use App\Models\Cliente;
use App\Models\Producto;



class AdministradorController extends Controller
{
    public function listar(){   
        $artesanos = Artesano::with('user', 'comunidad')->get();
        $clientes = Cliente::with('user')->get();
        $repartidores = Repartido::with('user', 'vehiculo')->get();
        $productos = Producto::with('categoria')->get();
        $categorias = Categoria::all();
        //dd($artesanos);
        // Enviar todas las variables a la vista
        return view('Admin.Administracion', compact(
            'artesanos', 
            'clientes', 
            'repartidores', 
            'productos', 
            'categorias'
        ));
    }

}
