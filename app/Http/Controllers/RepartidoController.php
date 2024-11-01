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

class RepartidoController extends Controller
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
        // Obtener todos los repartidos con sus respectivos usuarios
        $repartidos = Repartido::with('user')->get();
        
        return view('Admin.Administracion', compact('repartidos'));
    }
    
    public function edit($id_repartidor)
    {
        $repartido = Repartido::with('user')->findOrFail($id_repartidor); // Si la columna es 'id_repartidor'
        return view('Admin.EditarRepartidor', compact('repartido'));
    }

    public function update(Request $request, $id_repartidor)
    {
        $repartido = repartido::findOrFail($id_repartidor);
        $user = $repartido->user;

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
 
        $repartido->update([
            'disponibilidadR' => $request->disponibilidadR, // Corrige el nombre sin espacio extra
        ]);

        return redirect()->route('Administrador.listar')->with('success',  'repartido actualizado correctamente');
    }
    public function destroy($id_repartidor)
    {
        $repartido = Repartido::where('id_repartidor', $id_repartidor)->firstOrFail();
        $repartido->delete();

        return redirect()->route('Administrador.listar')->with('success', 'Repartidor eliminado correctamente.');
    }

    public function registroRepartidor(Request $request){
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
        $vehiculo =new Vehiculo();

        $vehiculo->modeloV=$request->modeloV;
        $vehiculo->placaV=$request->placaV;
        $vehiculo->colorV=$request->colorV;
        $vehiculo->tipoV=$request->tipoV;
        $vehiculo->save();

        // Guardar datos específicos de Repartidor
        $repartidor = new Repartido();
        $repartidor->id_repartidor = $user->id_usuario; // Relación con User
        $repartidor->id_vehiculo = $vehiculo->id_vehiculo;
        $repartidor->disponibilidadR = $request->disponibilidadR ?? 1; // Si no se envía, se asigna "Tiempo completo"
        $repartidor->calificacionR = $request->calificacionR ?? 6; // Asignar calificación por defecto si no se proporciona
        $repartidor->save();

        Auth::login($user);
       /* $this->verificarToken();

        return redirect()->route('Verificacion');*/
        return redirect(route('PerfilUsuario'));
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
}
