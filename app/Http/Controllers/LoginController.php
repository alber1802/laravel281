<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


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
        return redirect(route('privada'));

    }
   public function login(Request $request)
    {
    $credentials = [
        "email"  =>  $request->email,
        "password" => $request->password,
    ];
    $remember =($request -> has('remember')? true : false );

    if (Auth::attempt($credentials, $remember)) {
        // Si es exitoso, guardar un mensaje en la sesión
        //session()->flash('success', 'Inicio de sesión exitoso. ¡Bienvenido !');
        $request->session()->regenerate();

        return redirect()->intended('private');
 
    } else {
       
        return redirect('login');
        
    }

    }

    public function verifyCode(Request $request)
    {
    // Concatenar el código introducido por el usuario
    $inputCode = implode('', $request->input('code'));

    // Aquí deberías verificar si el código es correcto (por ejemplo, comparándolo con el almacenado en la base de datos o sesión)
    if ($inputCode == session('verification_code')) {
        // El código es correcto
        return redirect()->route('home')->with('success', 'Correo verificado correctamente.');
    } else {
        // El código es incorrecto
        return back()->with('error', 'El código de verificación es incorrecto.');
    }
    }


}
