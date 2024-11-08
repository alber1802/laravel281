<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Artesano;
use App\Models\Publica;
use App\Models\Resena;
use App\Models\Categoria;
use App\Models\Obtiene;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaleriaController extends Controller
{
    public function listaP()
    {
       /* $datos = Producto::with('categoria')->get();
      //  dd($datos);
        return view('PaginasHome.comercio', ['datos' => $datos]); */
        // Obtener los productos paginados junto con la categoría
        $datos = Producto::with('categoria')->paginate(12);  // Pagina de 12 en 12
        // Pasar los productos paginados a la vista
        return view('PaginasHome.comercio', compact('datos'));

    }

    public function VerDetalle($id_producto)
    {
        // Obtener los detalles de la publicación junto con el artesano y producto relacionados
        $detalles = Publica::with(['artesano.user', 'producto'])
        ->where('id_producto', $id_producto)
        ->firstOrFail();

        // Verificar si se encontró el detalle
        if (!$detalles) {
            return redirect()->back()->with('error', 'Detalle no encontrado');
        }
        $categoria_id = $detalles->producto->id_categoria ?? null;
        //dd($categoria_id);

        // Obtener productos relacionados por la misma categoría, excluyendo el producto actual
        $productosRelacionados = Producto::where('id_categoria', $categoria_id)
            ->where('id_producto', '!=', $id_producto) // Excluir el producto actual
            ->limit(8) // Mostrar solo 4 productos relacionados
            ->get();
            
    
        // Pasar los datos a la vista
        return view('PaginasHome.shop-detail', compact('detalles', 'productosRelacionados'));
    }
    public function RegistrarReseña(Request $request, $id_producto){
       
            $usuario = Auth::user();

            $cometario= new Resena();

            $cometario->comentario=$request->comentario;
            $cometario->calificacionR=$request->calificacionR;
            $cometario->id_usuario =$usuario->id_usuario;
            $cometario->fecha_resena = now();
        
            $cometario->save();

            $obtiene= new Obtiene();

            $obtiene->id_producto=$id_producto;
            $obtiene->id_resena = $cometario->id_resena;
            
            $obtiene->save();

            return back()->with('Registro_comentario', 'Comentario registrado exitosamente.');
    
    }
    



    
}
