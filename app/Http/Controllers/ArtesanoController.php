<?php

namespace App\Http\Controllers;

use App\Models\Artesano;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Repartido;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Pedido;
use App\Models\Comunidad;
use Illuminate\Support\Facades\DB;


class ArtesanoController extends Controller
{
    public function listar(){   
        $artesanos = Artesano::with('user', 'comunidad')->get();
        $clientes = Cliente::with('user')->get();
        $repartidores = Repartido::with('user', 'vehiculo')->get();
        $productos = Producto::with('categoria')->get();
        $categorias = Categoria::all();
        $pedidos = Pedido::all();
        $comunidads = Comunidad::all();
        //dd($artesanos);
        // Enviar todas las variables a la vista
        return view('Admin.Administracion', compact(
            'artesanos', 
            'clientes', 
            'repartidores', 
            'productos', 
            'categorias',
            'pedidos',
            'comunidads'
        ));
    }

    public function listaArt()
    {
        $datos = Artesano::with('user', 'comunidad')->get();
        return view('PaginasHome.lisArtesano', ['datos' => $datos]);
    }

    public function index()
    {
        $artesanos = Artesano::with('user')->get();
        return view('Admin.Administracion', compact('artesanos'));
    }

    public function edit($id_artesano)
    {
        $artesano = Artesano::with('user')->findOrFail($id_artesano);
        return view('Admin.EditarArtesano', compact('artesano'));
    }

    public function update(Request $request, $id_artesano)
    {
        $artesano = artesano::findOrFail($id_artesano);
        $user = $artesano->user;

        $user->update([
            'name' => $request->name,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'nombre' => $request->nombre,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'email' => $request->email,
        ]);
 
        $artesano->update([
            'descripcionA' => $request->descripcionA,
        ]);

        return redirect()->route('Administrador.listar')->with('success', 'Artesano actualizado correctamente');
    }

    public function destroy($id_artesano)
    {
        $artesano = Artesano::where('id_artesano', $id_artesano)->firstOrFail();
        $artesano->delete();

        return redirect()->route('Administrador.listar')->with('success', 'Artesano eliminado correctamente');
    }

    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'paterno' => 'required|string|max:255',
            'materno' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'sexo' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'email' => 'required|email|unique:artesanos,email',
            'descripcionA' => 'required|string|max:255',
        ]);

        // Crear el nuevo artesano
        Artesano::create($validated);

        // Redireccionar con un mensaje de éxito
        return redirect()->route('Administrador.listar')->with('success', 'Artesano agregado exitosamente');
    }

    public function registroArtesano(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->nombre = $request->nombre; // nombre de usuario alias
        $user->paterno = $request->paterno;
        $user->materno = $request->materno;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->telefono = $request->telefono;
        $user->direccion = $request->direccion;
        $user->sexo = $request->sexo;
        $user->fecha_nacimiento = $request->fecha_nacimiento;

        // Guardar imagen de perfil
        if ($request->hasFile('file')) {
            $imagenes = $request->file('file')->store('public/imagenesPerfil');
            $url = Storage::url($imagenes);
            $user->url = $url;
        }
        $user->save();
        //--------------------
        $comunidad=new Comunidad();
        $comunidad->nombreCo=$request->nombreCo;
        $comunidad->ciudad=$request->ciudad;
        $comunidad->ubicacionC=$request->nombreCo.' '.$request->ciudad;
        $comunidad->save();

    
        // Guardar datos específicos de Artesano
        $artesano = new Artesano();
        $artesano->id_artesano = $user->id_usuario; // Relación con User
        $artesano->id_comunidad = $comunidad->id_comunidad ;
        $artesano->especialidadA = $request->especialidadA;
        $artesano->descripcionA = $request->descripcionA;
        // Verifica si la calificación está presente, si no, asigna un valor predeterminado
        $artesano->calificacionA = $request->calificacionA ?? 0; // Si no hay calificación, asigna 0
        $artesano->save();

        Auth::login($user);
       /* $this->verificarToken();

        return redirect()->route('Verificacion');*/
        return redirect(route('Administrador.listar'));
    }

    public function login(Request $request){
        // Validar los campos de entrad
            $credentials = [
                "email"  =>  $request->email,
                "password" => $request->password,
            ];

         $remember =($request -> has('remember')? true : false );

        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();

            // Obtener el ID del usuario autenticado 
            /* $user = Auth::user(); 
            // Identificar si es cliente, artesano o repartidor        
            $this->verificarToken();

            return redirect()->route('Verificacion');*/
            
            return redirect(route('PerfilUsuario'));
        }else {
        
            return redirect(route('login'));
            
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()-> invalidate();
        $request->session()->regenerateToken();

        return redirect(route('Home'));
    }
    //*********************** */
    public function verificarToken(){
        $user = Auth::user(); // Obtener el usuario autenticado

        // Generar un código aleatorio de 6 dígitos numéricos
        $codigo = rand(100000, 999999);

        // Guardar el código y la hora de expiración (10 minutos a partir de ahora)
        $user->verification_token = $codigo;
        $user->verification_token_expires_at = Carbon::now()->addMinutes(10);
        $user->save();

        // Enviar el código por correo
        Mail::raw("Tu código de verificación es: {$codigo}", function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Código de Verificación');
        });

        // Opcional: puedes redirigir a la vista donde el usuario ingresa el código
    }

    //------------------------------
    public function confirmarCodigo(Request $request){
        $user = Auth::user(); // Obtener el usuario autenticado

        // Verificar que el token proporcionado coincida con el almacenado y no haya expirado
        // && $user->verification_token_expires_at > Carbon::now()
        if ($user->verification_token === $request->codigo) {
            // Código correcto y no expirado
            // Aquí puedes marcar el email como verificado u otra acción
            $user->email_verified_at = Carbon::now();
            $user->verification_token = null; // Opcional: limpiar el token
            $user->verification_token_expires_at = null;
            $user->save();

            return redirect(route('PerfilUsuario'));
        }

        // Si el código es incorrecto o ha expirado
        return back()->withErrors(['codigo' => 'Código incorrecto o expirado.']);
    }

    public function productos($id_artesano)
    {
        // Consulta para obtener productos y datos del artesano, incluyendo la categoría
        $productos = DB::table('productos')
            ->join('publicas', 'productos.id_producto', '=', 'publicas.id_producto')
            ->join('users', 'publicas.id_artesano', '=', 'users.id_usuario') // Unir con la tabla users
            ->join('categorias', 'productos.id_categoria', '=', 'categorias.id_categoria') // Unir con la tabla categorias
            ->where('publicas.id_artesano', $id_artesano)
            ->select(
                'productos.*', 
                'publicas.fechaP', 
                'users.name', 
                'users.paterno', 
                'users.materno', 
                'categorias.nombreCa',  // Selecciona el nombre de la categoría
                'categorias.descripcionCa' // Selecciona la descripción de la categoría
            ) // Selecciona los campos que quieres mostrar
            ->get();

        return view('Admin.productosArtesano', [
            'productos' => $productos,
            'id_artesano' => $id_artesano,
        ]);
    }


}