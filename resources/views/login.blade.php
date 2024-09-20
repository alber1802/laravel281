<!DOCTYPE html>
<html lang=es>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
        <!-- Fonts -->  
        <!-- Styles -->
        <link href="{{ asset('css/index.css') }}" rel="stylesheet" />

    
        
    </head>
        <body class="font-sans antialiased dark:bg-black dark:text-white/50">
            <div class="contenedor-0">
            <div class="contenedor-1">
                <!-- Aquí puedes poner el logo o cualquier imagen -->
                <a class="navbar-brand" href="{{route('Home')}}">
                    <img src="{{ asset('imagen/logo.png') }}" class="logo" alt="Logo" />
                </a>
            </div>

            <div class="division_2">
                <div class="login">
                    <div class="mx-auto max-w-md space-y-6">
                        <div class="space-y-2 text-center text-white">
                            <h1 class="text-3xl font-bold">Iniciar Sesión</h1>
                            <p class="text-muted-foreground">Accede con tu cuenta</p>
                        </div>

                        <form name="iniciar" method="POST" action="{{route('iniciar')}}">
                            @csrf
                            <div class="space-y-4">
                                <!-- Campo de correo electrónico -->
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-white" for="email">
                                        Correo electrónico
                                    </label>
                                    <input id="email" type="email" name="email"
                                      placeholder="correo@ejemplo.com" required class="input"
                                    />
                                </div>
                                
                                <!-- Campo de contraseña -->
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-white" for="password">
                                        Contraseña
                                    </label>
                                    <input  id="password" type="password" name="password" 
                                     placeholder="********" required class="input" 
                                    />
                                </div>
                                
                                <a href="{{ route('Recuperar') }}" class="register-link">¿Olvidaste tu Contraseña?</a>
                                
                                <!-- Botón de iniciar sesión -->
                                <button type="submit" class="btn w-full">
                                    Iniciar Sesión
                                </button>

                                <!-- Botón para iniciar sesión con Google -->
                                
                                
                                <!-- Enlace para registrarse -->
                                <div class="text-center text-muted-foreground mt-4">
                                    <p>¿Aún no tienes cuenta? 
                                        <a href="{{route('register')}}" class="register-link">Registrarse</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="contenedor-3">
                <p>LLÁMANOS +591 78654321 | MI CUENTA | DÓNDE ESTAMOS | CONTÁCTANOS</p>
            </div>
        </div>

    </body>
</html>

