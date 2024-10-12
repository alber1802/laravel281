<?php

namespace App\Http\Controllers;
use App\Models\Publica;
use Illuminate\Http\Request;
use App\Models\Artesano;
class PublicaController extends Controller
{

    public function artesanoP($id)
    {
       
       //dd('Método liddhhhhdstaP fue llamado'); 
        $datos = Publica::with(['productos', 'artesano.user'])->where('id_artesano', $id)->get();
        $artesano = Artesano::with('user')->findOrFail($id);
        return view('PaginasHome.lisPublica', ['datos' => $datos, 'artesano' => $artesano]);
    }
    
    public function artesanoPP($id)
    { 
        $datos = Publica::with(['artesano.user'])->where('id_artesano', $id)->get();
        $artesano = Artesano::with('user')->findOrFail($id);
        return view('PaginasHome.agregarProductos', ['datos' => $datos, 'artesano' => $artesano]);
    }

}
