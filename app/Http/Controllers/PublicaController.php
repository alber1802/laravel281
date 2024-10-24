<?php

namespace App\Http\Controllers;
use App\Models\Publica;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Artesano;
class PublicaController extends Controller

{

    public function artesanoP()
    {
        $usuario = Auth::user();
        $id = $usuario->id_usuario;
    
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
    
    
    public function artesanoPP()
    { 
        $usuario = Auth::user();
        $id=$usuario->id_usuario;
        $datos = Publica::with(['artesano.user'])->where('id_artesano', $id)->get();
        $artesano = Artesano::with('user')->findOrFail($id);
        return view('PaginasHome.agregarProductos', ['datos' => $datos, 'artesano' => $artesano]);
    }

}
