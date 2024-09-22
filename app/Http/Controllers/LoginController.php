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
        // Validar los campos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    $credentials = [
        "email"  =>  $request->email,
        "password" => $request->password,
    ];
    $remember =($request -> has('remember')? true : false );

    if (Auth::attempt($credentials, $remember)) {
        // Si es exitoso, guardar un mensaje en la sesión
        //session()->flash('success', 'Inicio de sesión exitoso. ¡Bienvenido !');
        $request->session()->regenerate();

        return redirect(route('privada'));
 
    } else {
       
        return redirect(route('login'));
        
    }

    }

    


}
