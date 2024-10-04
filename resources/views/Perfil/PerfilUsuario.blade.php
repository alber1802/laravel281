<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Cliente</title>
    <link rel="stylesheet" href="{{asset('css/Perfil/PerfilUsuario.css')}}">
</head>
<body>
    <div class="container">
        <!-- Sección izquierda -->
        <div class="left-section wider">
            <div class="header">
                <!-- Mostrar imagen de perfil -->
                <div class="profile-pic">
                    <img src="{{$usuario->url}}" alt="Foto de perfil" class="profile-img">
                </div>
                <h1>¡{{ $usuario->nombre}}!</h1>
                <p class="buyer-persona">Usuario</p>
                <!-- Información básica -->
                <div class="about">
                    <h3>INFORMACIÓN PERSONAL</h3>
                    <p><strong>Nombre:</strong>{{$usuario->name}} {{$usuario->paterno}} {{$usuario->materno}}</p>
                    <p><strong>Fecha de Nacimiento:</strong> {{$usuario->fecha_nacimiento}}</p>
                    <p><strong>Correo Electrónico:</strong> {{$usuario->email}}</p>
                    <p><strong>Teléfono:</strong> {{$usuario->telefono}}</p>
                    <p><strong>Dirección:</strong> {{$usuario->direccion}}</p>
                    <p><strong>Sexo:</strong> @if($usuario->sexo == 'M')
                                                    Masculino 
                                                @else 
                                                    Femenino 
                                                @endif</p>
                </div>

                <!-- Redes sociales con círculos -->
                <div class="social-icons">
                    <div class="circle"><img src="imagen/Perfil/facebook.png" alt="Facebook"></div>
                    <div class="circle"><img src="imagen/Perfil/instagram.png" alt="Instagram"></div>
                    <div class="circle"><img src="imagen/Perfil/tik-tok.png" alt="TikTok"></div>
                    <div class="circle"><img src="imagen/Perfil/whatsapp.png" alt="WhatsApp"></div>
                </div>
            </div>
        </div>

        <!-- Sección derecha -->
        <div class="right-section">
            <!-- Barra de navegación horizontal -->
            <div class="horizontal-nav">
                <div class="nav-item" >Inicio</div>
                <div class="nav-item"><a href="{{route('ActualizarPerfil')}}" >Editar Perfil</a></div>
                <div class="nav-item">Ver Productos</div>
                <div class="nav-item">Notificaciones</div>
                <div class="nav-item">Mensajes</div>
                <div class="nav-item"><a href="{{route('Cerrar-Session')}}" >Cerrar Seccion</a></div>
            </div>

            <!-- Apartados de información -->
            <div class="info-section">
                <!-- Últimos pedidos -->
                <div class="last-orders">
                    <h3>Últimos Pedidos</h3>
                    <p><strong>Número de pedidos:</strong> 5</p>
                    <p><strong>Estado del último pedido:</strong> Completado</p>
                    <p><strong>Total pagado:</strong> $250.00</p>
                    <p><strong>Fecha del pedido:</strong> 15/09/2024</p>
                    <p><strong>Repartidor:</strong> Juanito</p>
                </div>

                <!-- Preferencias del Cliente -->
                <div class="preferences-info">
                    <h3>Preferencias de Cliente</h3>
                    <p><strong>Productos Favoritos:</strong> {{$perfil->preferencia}}</p>
                    <p><strong>Método de Pago Favorito:</strong> Tarjeta de Crédito, Efectivo</p>
                    <p><strong>Opciones de Notificación:</strong> E-mail, SMS</p>
                    
                </div>
            </div>
          
            <div class="thend-item">
                <p><span>Tendencia1</span></p>
                <p><span>Tendencia2</span></p>
                <p><span>Tendencia3</span></p>
            </div>

            <!-- Tendencias para ti -->
            
        </div>
    </div>

    <script>
        function toggleExtraInfo() {
            var extraInfo = document.getElementById("extra-info");
            var btn = document.querySelector(".show-more-btn");
            if (extraInfo.classList.contains("hidden")) {
                extraInfo.classList.remove("hidden");
                btn.innerHTML = "Ver Menos";
            } else {
                extraInfo.classList.add("hidden");
                btn.innerHTML = "Ver Más";
            }
        }
    </script>
</body>
</html>
