<?php

namespace App\Http\Controllers;
use App\Models\Publica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Artesano;
class PublicaController extends Controller

{

    public function artesanoP()
    {
        $usuario = Auth::user();
        $id=$usuario->id_usuario;
       //dd('Método liddhhhhdstaP fue llamado'); 
        $datos = Publica::with(['productos', 'artesano.user'])->where('id_artesano', $id)->get();
        $artesano = Artesano::with('user')->findOrFail($id);
        return view('PaginasHome.lisPublica', ['datos' => $datos, 'artesano' => $artesano]);
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
