<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
class CatalogoController extends Controller
{
    //

    public function Catalogo(){
        $productos = Producto::with('categoria')->get();
        $categorias = Categoria::all();
        return view('PaginasHome.Catalogo', compact('productos', 'categorias')); 
    }  

}
