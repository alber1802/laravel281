<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Repartidor</title>
    <link rel="stylesheet" href="{{asset('css/LoginRegistro/repartidor.css')}}">
</head>
<body>
<div class="background"></div>
    <div class="fondo">
    <div class="container">
        <!-- Mueve el div right-side al lado izquierdo -->
        <div class="side right-side">
            <h2>Crear Tu Cuenta de Repartidor </h2>
            <form name="registro" action="{{ route('validar-registroR') }}" method="POST"  enctype="multipart/form-data" >
                @csrf
                <div class="form-row">
                    <input id="nombre" name="nombre" placeholder="Nombre de Pila" required class="input" />
                    <input id="name" name="name" placeholder="Nombre" required class="input" />
                </div>
                <div class="form-row">
                    <input id="paterno" name="paterno" placeholder="Apellido Paterno" required class="input" />
                    <input id="materno" name="materno" placeholder="Apellido Materno" required class="input" />
                </div>
                <input id="email" name="email" type="email" placeholder="Correo Electronico" required class="input" />
                <input id="direccion" name="direccion"  placeholder="Donde Vives?" required class="input" />
                <input id="telefono" name="telefono" type="tel" placeholder="Numero de Celular " required class="input" />
                <div class="form-row">
                        <select id="sexo" name="sexo" required class="input">
                             <option value="">Selecciona tu Genero</option>
                             <option value="M">Masculino</option>
                             <option value="F">Femenino</option>
                        </select>
                        <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" required class="input" />
                </div>
                <h3>Datos del Vehículo</h3>

                <div class="form-row">
                <input id="colorV" name="colorV" placeholder="Color" required class="input" />
                <select id="tipoV" name="tipoV" required class="input">
                    <option value="" disabled selected>Tipo de Vehículo</option>
                    <option value="Moto">Moto</option>
                    <option value="Auto">Auto</option>
                </select>
                </div>
                <div class="form-row">
                    <input id="modeloV" name="modeloV" placeholder="Modelo" required class="input" />
                    <input id="placaV" name="placaV" placeholder="Placa" required class="input" />

              </div>
                 <input id="password" name="password" type="password" placeholder="Contraseña " required class="input" onkeyup="validatePassword()" />
                    <br />
                    <small id="passwordHelp" class="text-white"></small>
                <input  type="file" id="file" name="file" accept="image/*" class="input">
                <button type="submit">Registrate Repartidor!</button>
            </form>
            
            <p>Ya Tienes una Cuenta Creada? <a href="{{ route('login') }}" style="color: #e1b382;">Iniciar Sesion!</a></p>
        </div>

        <!-- Mueve el div left-side al lado derecho -->
        <div class="side left-side" id="leftSide">
            <h1>Vuelvete nuestro Repartidor!</h1>
            <div class="profile-pic">
                <img src="{{ asset('imagen/logo.png') }}" alt="Profile picture">
            </div>
        </div>
    </div>
    </div>
  
    <script src="{{asset('js/Validaciones/VerificacionPassword.js')}}" ></script>
</body>
</html>