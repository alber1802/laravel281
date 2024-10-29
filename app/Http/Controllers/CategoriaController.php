<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Categoria;



class CategoriaController extends Controller
{
    public function registerC(Request $request)
    {  
        
        $categoria = new Categoria();
        $categoria->nombreCa = $request->nombreCa; 
        $categoria->descripcionCa = $request->descripcionCa;
        $categoria->save();
        //dd('Método liddhhhhdstaP fue llamado'); 
        return back()->with('success', 'categoria creado con éxito.');
        //return redirect()->route('PaginasHome.lisProductos')->with('success', 'Categoria creado con éxito.');

    } 
   
}
