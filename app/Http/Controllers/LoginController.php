<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artesano;
use App\Models\Repartido;
use App\Models\Cliente;
use App\Models\Vehiculo;
use App\Models\Comunidad;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Mail\VerificacionMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;



class LoginController extends Controller
{
    public function registerCliente(Request $request){
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

        // Guardar datos específicos de Cliente
        $cliente = new Cliente();
        $cliente->id_cliente = $user->id_usuario;
        $cliente->preferencia= $request->preferencia;// Relación con User
        $cliente->save();

        Auth::login($user);
         /* $this->verificarToken();

        return redirect()->route('Verificacion');*/
        return redirect(route('PerfilUsuario'));
  }

    public function registerArtesano(Request $request){
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

        
        //cambiadoCarmen////$this->verificarToken();

       //cambiadoCarmen// //return redirect()->route('Verificacion');
       /* $this->verificarToken();

        return redirect()->route('Verificacion');*/
        return redirect(route('PerfilUsuario'));
    }

    public function registerRepartidor(Request $request){
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
        //dd($request->all());
        // Validar los campos de entrad
            $credentials = [
                "email"  =>  $request->email,
                "password" => $request->password,
            ];

         $remember =($request -> has('remember')? true : false );

        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();

            // Obtener el ID del usuario autenticado 
            /*$user = Auth::user(); 
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
