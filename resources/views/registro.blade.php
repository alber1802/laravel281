<link href="{{ asset('css/registro.css') }}" rel="stylesheet" />

<div class="contenedor-0">
    <div class="contenerdor-1">
        <!-- Aquí puedes poner el logo o cualquier imagen -->
        <a class="navbar-brand" href="{{route('iniciarSesion')}}">
            <img src="{{ asset('imagen/logo.png') }}" class="logo" alt="Logo" />
        </a>
    </div>

    <div class="division_2">
        <div class="registro">
            <div class="mx-auto max-w-md space-y-6">
                <div class="space-y-2 text-center text-white">
                    <h1 class="text-3xl font-bold">Registro</h1>
                    <p class="text-muted-foreground">Ingresa tus datos para crear una cuenta</p>
                </div>
                <form name="registro" action="{{ route('register') }}" method="POST" onsubmit="return validateForm()">
                    @csrf
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="username">
                                    Nombre de usuario
                                </label>
                                <input id="username" name="username" placeholder="JuanPerez" required class="input" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="first-name">
                                    Nombre(s)
                                </label>
                                <input id="first-name" name="first_name" placeholder="Juan" required class="input" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="last-name">
                                    Apellido Paterno
                                </label>
                                <input id="last-name" name="last_name" placeholder="Pérez" required class="input" />
                            </div>
                            <div class="space1-y-2">
                                <label class="text-sm font-medium text-white" for="last-name">
                                    Apellido Materno
                                </label>
                                <input id="last-name" name="last_name" placeholder="Pérez" required class="input" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="phone">
                                    Número de celular
                                </label>
                                <input id="phone" name="phone" type="tel" placeholder="+52 123 456 7890" required class="input" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-white" for="email">
                                Correo electrónico
                            </label>
                            <input id="email" name="email" type="email" placeholder="juan.perez@example.com" required class="input" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-white" for="city">
                                Ciudad/Comunidad
                            </label>
                            <input id="city" name="city" placeholder="Ciudad de México" required class="input" />
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="password">
                                    Contraseña
                                </label>
                                <input id="password" name="password" type="password" required class="input" />
                            </div>
                        
                        </div>
                        <button type="submit" class="btn">
                            Registrarse
                        </button>
                        <div class="mt-4 text-center text-muted-foreground">
                            <p>¿Ya tienes cuenta? <a href="{{route('iniciarSesion')}}" class="register-link">Inicia sesión</a></p>
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
