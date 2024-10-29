<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

use Illuminate\Support\Facades\Storage;


class ClienteController extends Controller
{
    public function listaCliente()
    {   
        //dd('Método liddhhhhdstaP fue llamado'); 
        $datos = Cliente::with('user')->get();
        return view('PaginasHome.lisPedidos', ['datos' => $datos]); 
    }
}
