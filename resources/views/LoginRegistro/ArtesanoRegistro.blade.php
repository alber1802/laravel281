<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Animated Signup Form</title>
    <link rel="stylesheet" href="{{asset('css/LoginRegistro/ArtesanoRegistro.css')}}">
</head>
<body>
<div class="background"></div>
    <div class="fondo">
    <div class="container">
        <div class="side left-side" id="leftSide">
            <h1>Se un Artesano y vende los Productos de tu Comunidad</h1>
            <div class="profile-pic">
                 <a href="{{ route('Home') }}"><img src="{{ asset('imagen/logo.png') }}"  alt="Profile picture"></a>  
            </div>
        </div>
        <div class="side right-side">
            <h2>Crear Tu Cuenta de Artesano </h2>
            <form name="registro" action="{{ route('validar-registroA') }}" method="POST"  enctype="multipart/form-data" >
                    @csrf
                <div class="form-row">
                    <input id="nombre" name="nombre" placeholder="Nombre de Pila" required class="input" />
                    <input id="name" name="name" placeholder="Nombre" required class="input" />
                </div>
                <div class="form-row">
                    <input id="paterno" name="paterno" placeholder="Apellido Paterno" required class="input" />
                    <input id="materno" name="materno" placeholder="Apellido Materno" required class="input" />
                </div>
                <div class="form-row">
                    <input id="email" name="email" type="email" placeholder="Correo Electronico" required class="input" />
                    <input id="direccion" name="direccion"  placeholder="Donde Vives?" required class="input" />
                </div>
                <div class="form-row">
                        <select id="sexo" name="sexo" required class="input">
                             <option value="" disabled selected>Selecciona tu Genero</option>
                             <option value="M">Masculino</option>
                             <option value="F">Femenino</option>
                        </select>
                        <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" required class="input" />
                </div>
                <div class="form-row">
                     <select id="nombreCo" name="nombreCo"" required class="input" require>
                                <option value="" disabled selected>Selecciona Tu comunidad</option>
                                <option value="Achocalla">Achocalla</option>
                                <option value="Mecapaca">Mecapaca</option>
                                <option value="Sorata">Sorata</option>
                                <option value="Tiquipaya">Tiquipaya</option>
                                <option value="Coroico">Coroico</option>
                                <option value="San Bernaldo">San Bernaldo</option>
                     </select>
                     <select id="ciudad" name="ciudad" required class="input" require>
                            <option value="" disabled selected >Seleccione tu Cuidad</option>
                            <option value="La Paz">La Paz</option>
                            <option value="Cochabamba">Cochabamba</option>
                            <option value="Santa Cruz">Santa Cruz</option>
                            <option value="Beni">Beni</option>
                            <option value="Pando">Pando</option>
                            <option value="Tarija">Tarija</option>
                            <option value="Chuquisaca">Chuquisaca</option>
                            <option value="Oruro">Oruro</option>
                            <option value="Potosí">Potosí</option>
                     </select>
                </div>
                <input id="telefono" name="telefono" type="tel" placeholder="Numero de Celular " required class="input" />
                <div class="form-row">
                    <input id="password" name="password" type="password" placeholder="Contraseña " required class="input" onkeyup="validatePassword()" />
                    <br />
                    <small id="passwordHelp" class="text-white"></small>
              </div>
                <input id="especialidadA" name="especialidadA"  placeholder="Cual es tu Especialidad " required class="input" />
                <input id="descripcionA" name="descripcionA"  placeholder="Describete en pocas palabras" required class="input" />
                <input  type="file" id="file" name="file" accept="image/*" class="input">
                <button type="submit">Registra el Artesano</button>
            </form>
            <p>Ya Tienes una Cuenta Creada? <a href="{{route('login')}}" style="color: #e1b382;">Iniciar Sesion!</a></p>
    </div>
    </div>
    <script src="{{asset('js/LoginRegistro/Artesano.js')}}"></script>
    <script src="{{asset('js/Validaciones/VerificacionPassword.js')}}" ></script>
</body>
</html>
