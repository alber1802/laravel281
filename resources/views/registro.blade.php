<link href="{{ asset('css/registro.css') }}" rel="stylesheet" />

<div class="contenedor-0">
    <div class="contenerdor-1">
        <!-- Aquí puedes poner el logo o cualquier imagen -->
        <a class="navbar-brand" href="{{route('login')}}">
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
                <form name="registro" action="{{ route('validar-registro') }}" method="POST"  enctype="multipart/form-data" >
                    @csrf
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="nombre">
                                    Nombre de usuario
                                </label>
                                <input id="nombre" name="nombre" placeholder="JuanPerez" required class="input" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="name">
                                    Nombre(s)
                                </label>
                                <input id="name" name="name" placeholder="Juan" required class="input" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="paterno">
                                    Apellido Paterno
                                </label>
                                <input id="paterno" name="paterno" placeholder="Pérez" required class="input" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="materno">
                                    Apellido Materno
                                </label>
                                <input id="materno" name="materno" placeholder="Quispe" required class="input" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="sexo">Sexo</label>
                                <select id="sexo" name="sexo" required class="input">
                                    <option value="">Selecciona</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div class="space1-y-2">
                                <label class="text-sm font-medium text-white" for="fecha_nacimiento">
                                    Fecha de Nacimiento 
                                </label>
                                <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" required class="input" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="telefono">
                                    Número de celular
                                </label>
                                <input id="telefono" name="telefono" type="tel" placeholder="+591 69958756 " required class="input" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-white" for="email">
                                Correo electrónico
                            </label>
                            <input id="email" name="email" type="email" placeholder="juan.perez@example.com" required class="input" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-white" for="direccion">Ciudad/Comunidad</label>
                            <select id="direccion" name="direccion" required class="input">
                                <option value="">Selecciona una comunidad</option>
                                <option value="Achocalla">Achocalla</option>
                                <option value="Mecapaca">Mecapaca</option>
                                <option value="Sorata">Sorata</option>
                                <option value="Tiquipaya">Tiquipaya</option>
                                <option value="Coroico">Coroico</option>
                                <option value="San Bernaldo">San Bernaldo</option>
                                <!-- Añade más opciones de comunidad aquí -->
                            </select>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="password">
                                    Contraseña
                                </label>
                                <input id="password" name="password" type="password" required class="input" onkeyup="validatePassword()" />
                                <small id="passwordHelp" class="text-white"></small>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-white" for="file"> Foto de Perfil(Obligatorio) </label>
                                <input  type="file" id="file" name="file" accept="image/*" class="input">
                            </div>
                        </div>
                        <button type="submit" class="btn">
                            Registrarse
                        </button>
                        <div class="mt-4 text-center text-muted-foreground">
                            <p>¿Ya tienes cuenta? <a href="{{route('login')}}" class="register-link">Inicia sesión</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="contenedor-3">
        <p>LLÁMANOS +591 78654321 | MI CUENTA | DÓNDE ESTAMOS | CONTÁCTANOS</p>
    </div>
    <script src="{{asset('js/Validaciones/VerificacionPassword.js')}}" ></script>
</div>
