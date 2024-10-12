<?php

namespace App\Http\Controllers;
use App\Models\Publica;
use App\Models\Artesano;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

use Illuminate\Support\Facades\Storage;

class ArtesanoController extends Controller
{
    
    public function listaArt()
    {   
        $datos = Artesano::with('user','comunidad')->get();
        return view('PaginasHome.lisArtesano', ['datos' => $datos]); 
    }

}
