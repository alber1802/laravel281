<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Mail\VerificacionMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class LoginController extends Controller
{
    public function register(Request $request)  {

        $user = new User();

        $user->name = $request->name;
        $user->nombre = $request->nombre; //nombre de usuario alias---
        $user->paterno = $request->paterno;
        $user->materno = $request->materno;
        
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        
      
        $user->telefono = $request->telefono;
        $user->direccion = $request->direccion;
        $user->sexo = $request->sexo;
        $user->fecha_nacimiento = $request->fecha_nacimiento;

        $user ->save();

        Auth::login($user);
        
        $this->verificarToken();

        
        return redirect()->route('Verificacion');
        

    }
   public function login(Request $request)
    {
        // Validar los campos de entrad
            $credentials = [
                "email"  =>  $request->email,
                "password" => $request->password,
            ];

         $remember =($request -> has('remember')? true : false );

    if (Auth::attempt($credentials, $remember)) {
        // Si es exitoso, guardar un mensaje en la sesión
        //session()->flash('success', 'Inicio de sesión exitoso. ¡Bienvenido !');
        $request->session()->regenerate();

        // Obtener el ID del usuario autenticado
        $user = Auth::user(); 

        $this->verificarToken();

        return redirect()->route('Verificacion');
        
        
    } else {
       
        return redirect(route('login'));
        
    }

    }
    //*********************** */
    public function verificarToken()
    {
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
    public function confirmarCodigo(Request $request)
    {
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
