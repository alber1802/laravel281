<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function eliminar($id)
    {
        $producto = Producto::find($id);
        if ($producto) {
            $producto->delete();
            return redirect()->route('PaginasHome.lisProductos')->with('success', 'Producto eliminado correctamente.');
        }

        return redirect()->route('PaginasHome.lisProductos')->with('error', 'Producto no encontrado.');
    }
    public function update(Request $request, $id)
    {
        //dd('Método liddhhhhdstaP fue llamado'); 
        $validatedData = $request->validate([
           
        'nombreP' => 'required|string|max:255',
        'descripcionP' => 'required|string',
        'materialP' => 'required|string|max:255',
        'precioP' => 'required|numeric',
        'stock' => 'required|integer',
        'colorP' => 'required|string|max:255',
        'tipoP' => 'required|string|max:255',
        'id_categoria' => 'required|integer',
        ]);
        
 
        $producto = Producto::find($id);
        $producto->nombreP = $request->nombreP;
        $producto->descripcionP = $request->descripcionP;
        $producto->materialP = $request->materialP;
        $producto->precioP = $request->precioP;
        $producto->stock = $request->stock;
        $producto->colorP = $request->colorP;
        $producto->tipoP = $request->tipoP;
        $producto->id_categoria = $request->id_categoria;

  
    if ($request->hasFile('imgP')) {
   
        $imagenes = $request->file('imgP')->store('public/imagenesProductos');
        $imgP = Storage::url($imagenes);
        $producto->imgP = $imgP;
    }


    $producto->save();
    return redirect()->route('PaginasHome.lisProductos')->with('success', 'Producto actualizado exitosamente');
    }

    public function editar($id)
    {
    
    $producto = Producto::findOrFail($id);
    return view('PaginasHome.editarProductos', compact('producto'));
    }


    public function listaP()
    {
        $datos = Producto::with('categoria')->get();
        return view('PaginasHome.lisProductos', ['datos' => $datos]); 
    }

    public function registerP(Request $request)
    {  
        $request->validate([
            'imgP' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $producto = new Producto();
        $producto->nombreP = $request->nombreP; 
        $producto->descripcionP = $request->descripcionP;
        $producto->materialP = $request->materialP;
        $producto->precioP = $request->precioP;
        $producto->stock = $request->stock;
        $producto->colorP = $request->colorP;
        $producto->tipoP = $request->tipoP;
       
    if ($request->hasFile('imgP')) {
   
        $imagenes = $request->file('imgP')->store('public/imagenesProductos');
        $imgP = Storage::url($imagenes);
        $producto->imgP = $imgP;
    }

        $producto->id_categoria = $request->id_categoria;
        $producto->save();
//dd('Método liddhhhhdstaP fue llamado'); 
        return redirect()->route('PaginasHome.lisProductos')->with('success', 'Producto creado con éxito.');

    } 
    public function registerC(Request $request){
        $categoria = new Categoria();

        $categoria ->nombreCa= $request->nombreCa;
        $categoria ->descripcionCa= $request->descripcionCa;
        $categoria ->save();
        return redirect()->route('agregarProductos');
    }
}


