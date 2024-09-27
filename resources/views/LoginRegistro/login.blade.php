<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Animated Login Form</title>
    <link rel="stylesheet" href="{{asset('css/LoginRegistro/login.css')}}">
</head>
<body>
<div class="background"></div>
    <div class="fondo">
    <div class="container">
        <!-- Sección de inicio de sesión -->
        <div class="side right-side" id="rightSide">
            <h2>Inicia Sesión</h2>
            <form name="iniciarSesion" method="POST" action="{{route('iniciar')}}">
                @csrf
                <input id="email" name="email" type="email" placeholder="Correo Electrónico" required class="input" />
                <input id="password" name="password" type="password" placeholder="Contraseña" required class="input" />
                <p>¿Olvidaste tu contraseña? <a href="{{ route('Recuperar') }}" style="color: #e1b382;">Recuperar</a></p>
                <button type="submit">Iniciar Sesión</button>
            </form>
            <p>¿No tienes cuenta? <a href="#" id="registerBtn" style="color: #e1b382;">¡Regístrate!</a></p>
        </div>

        <!-- Sección de bienvenida -->
        <div class="side left-side" id="leftSide">
            <h1>¡BIENVENIDO!</h1>
            <div class="profile-pic">
               <a href="{{route('Home')}}"><img src="{{ asset('imagen/logo.png') }}" alt="Profile picture"></a> 
            </div>
        </div>

        <!-- Sección central de registro -->
        <div class="center-section" id="centerSection">
            <h2>¿Cuál deseas registrarte?</h2>
            <div class="button-group">
                <button class="register-btn" id="btnArtesano">Registrarse como Artesano</button>
                <button class="register-btn" id="btnRepartidor">Registrarse como Repartidor</button>
                <button  class="register-btn" id="btnUsuario">Registrarse como Usuario</button>
            </div>

            <!-- Botón para regresar -->
            <button class="back-btn" id="backBtn">Regresar</button>
        </div>
    </div>
    </div>
    <script src="{{asset('js/LoginRegistro/Artesano.js')}}"></script>
    <script>
        // JavaScript para el movimiento de las secciones
        document.getElementById('registerBtn').addEventListener('click', function() {
            document.getElementById('leftSide').style.transform = 'translateX(-100%)';
            document.getElementById('rightSide').style.transform = 'translateX(100%)';
            document.getElementById('centerSection').style.display = 'flex';
        });

        // Botones de registro
        document.getElementById('btnArtesano').addEventListener('click', function() {
            window.location.href = '{{route('registerArtesano')}}';
        });
        document.getElementById('btnRepartidor').addEventListener('click', function() {
            window.location.href = '{{route('registerRepardidor')}}';
        });
        document.getElementById('btnUsuario').addEventListener('click', function() {
            window.location.href = '{{route('registerCliente')}}';
        });

        // Botón de regresar
        document.getElementById('backBtn').addEventListener('click', function() {
            document.getElementById('leftSide').style.transform = 'translateX(0)';
            document.getElementById('rightSide').style.transform = 'translateX(0)';
            document.getElementById('centerSection').style.display = 'none';
        });
    </script>
</body>
</html>
