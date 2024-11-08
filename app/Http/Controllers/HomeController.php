<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class HomeController extends Controller
{
   public function  enviar(){
    $productos = Producto::all();

    return view('welcome', compact('productos'));
   }
}
