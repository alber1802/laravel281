<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Artesano;
use App\Models\Publica;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    public function eliminar($id)
    {
        $producto = Producto::find($id);
        if ($producto) {
            $producto->delete();
            return redirect()->route('PaginasHome.lisProductos')->with('success', 'Producto eliminado correctamente.');
        }
        return back()->with('success', 'Producto creado con éxito.');
        //return redirect()->route('PaginasHome.lisProductos')->with('error', 'Producto no encontrado.');
    }

    public function eliminarProducto($id_producto)
    {
        $producto = Producto::findOrFail($id_producto);
        $producto->delete();
        return back()->with('success', 'Producto creado con éxito.');
        //return redirect()->route('PaginasHome.lisPublica')->with('success', 'Producto eliminado exitosamente');
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $validatedData = $request->validate([
          
                'nombreP' => 'required|string|max:255',
                'descripcionP' => 'required|string',
                'materialP' => 'required|string|max:255',
                'precioP' => 'required|numeric',
                'stock' => 'required|integer',
                'colorP' => 'required|string|max:255',
                'tipoP' => 'required|string|max:255',
                'id_categoria' => 'required|integer',
                'devolucionP' => 'nullable|string|max:255', 
                'certificacionP' => 'nullable|string|max:255', 
                'descuentoP' => 'nullable|numeric', 
                'metodoP' => 'nullable|string|max:255', 
                'costoEnvio' => 'nullable|numeric', 
                'tiempoEntrega' => 'nullable|string|max:255',
                'garantiaP' => 'nullable|string|max:255', 
                'autP' => 'nullable|string|max:255', 
                 
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
        $producto->imgP = str_replace('public/', '', $imagenes);
    }
    if ($request->hasFile('imgP2')) {
   
        $imagenes = $request->file('imgP2')->store('public/imagenesProductos');
        $producto->imgP2 = str_replace('public/', '', $imagenes);
    }
    if ($request->hasFile('imgP3')) {
   
        $imagenes = $request->file('imgP3')->store('public/imagenesProductos');
        $producto->imgP3 = str_replace('public/', '', $imagenes);
    }
        $producto->devolucionP = $request->devolucionP;
        $producto->certificacionP = $request->certificacionP;
        $producto->descuentoP = $request->descuentoP;
        $producto->metodoP = $request->metodoP;
        $producto->costoEnvio = $request->costoEnvio;
        $producto->tiempoEntrega = $request->tiempoEntrega;
        $producto->garantiaP = $request->garantiaP;
        $producto->autP = $request->autP;
        $producto->id_categoria = $request->id_categoria;

        $producto->save();
        
        return back()->with('success', 'Producto creado con éxito.');
        //return redirect()->route('PaginasHome.lisArtesano')->with('success', 'Producto creado con éxito.');
    
    }

    public function editar($id)
    {     
            $producto = Producto::findOrFail($id);
            $categorias = Categoria::all();
            return view('PaginasHome.editarProductos', [
                'producto' => $producto,
                'categorias' => $categorias
            ]); 
            
    }
    public function adicionar(Request $request)
    {  
        $usuario = Auth::user();
        $id_usuario=$usuario->$id_usuario;


        $usuario = Auth::user();
        //dd('Método liddhhhhdstaP fue llamado'); 
        $request->validate([
            'imgP' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'imgP2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'imgP3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
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
        $producto->imgP = str_replace('public/', '', $imagenes);
    }
    if ($request->hasFile('imgP2')) {
        $imagenes = $request->file('imgP2')->store('public/imagenesProductos');
        $producto->imgP2 = str_replace('public/', '', $imagenes);
    }
    if ($request->hasFile('imgP3')) {
        $imagenes = $request->file('imgP3')->store('public/imagenesProductos');
        $producto->imgP3 = str_replace('public/', '', $imagenes);
    }
        $producto->devolucionP = $request->devolucionP;
        $producto->certificacionP = $request->certificacionP;
        $producto->descuentoP = $request->descuentoP;
        $producto->metodoP = $request->metodoP;
        $producto->costoEnvio = $request->costoEnvio;
        $producto->tiempoEntrega = $request->tiempoEntrega;
        $producto->garantiaP = $request->garantiaP;
        $producto->autP = $request->autP;
        $producto->id_categoria = $request->id_categoria;
    
        $producto->save();
        
        $publica = new Publica();
        $publica->id_artesano = $usuario->id_usuario;
        $publica->id_producto = $producto->id_producto; 
        $publica->fechaP = now();
        $publica->estadoP = 7;
        $publica->save();

        return back()->with('success', 'Producto creado con éxito.');

        //return redirect()->route('PaginasHome.lisPublica/{{$id_usuario}}')->with('success', 'Producto creado con éxito.');
    } 
    public function registerC(Request $request){
        $categoria = new Categoria();

        $categoria ->nombreCa= $request->nombreCa;
        $categoria ->descripcionCa= $request->descripcionCa;
        $categoria ->save();
        return redirect()->route('agregarProductos');
    }

    
    
    public function artesano_id()
    {    
       // $usuario = Auth::user();
        $categorias = Categoria::all(); 
        return view('PaginasHome.agregarProductos', [
            'categorias' => $categorias 
    ]);
        //dd($categorias);
        return view('PaginasHome.agregarProductos', ['categorias' => $categorias ]);
    }

    public function listaP()
    {
        $datos = Producto::with('categoria')->get();
        return view('PaginasHome.lisProductos', ['datos' => $datos]); 
    }

  
}


