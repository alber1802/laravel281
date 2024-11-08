<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Repartidor</title>
    <link rel="stylesheet" href="{{asset('css/Perfil/PerfilRepartidor.css')}}">
    <link rel="shortcut icon" href="{{asset('imagen/logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('imagen/logo.png')}}">
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
                <h1>¡{{$usuario->nombre}} Repartidor!</h1>
                <p class="buyer-persona">Repartidor Activo</p>
                <!-- Información básica -->
                <div class="about">
                    <h3>INFORMACIÓN</h3>
                    <p><strong>Nombre:</strong>{{$usuario->name}} {{$usuario->paterno}} {{$usuario->materno}}</p>
                    <p><strong>Fecha de Nacimiento:</strong> {{$usuario->fecha_nacimiento}}</p>
                    <p><strong>Correo Electrónico:</strong> {{$usuario->email}}</p>
                    <p><strong>Teléfono:</strong> {{$usuario->telefono}}</p>
                    <p><strong>Dirección:</strong> {{$usuario->direccion}}</p>
                    <p><strong>Disponibilidad:</strong>@if($perfil->disponibilidadR == 1)
                                                    Tiempo Completo 
                                                @else 
                                                    Medio Tiempo 
                                                @endif</p>
                    <p><strong>Calificacion:</strong> {{$perfil->calificacionR}}</p>
                    
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
                <a href="{{route('Home')}}" ><div class="nav-item">Ir Inicio</div></a>
                <a href="{{route('pedidos.Realizados')}}" ><div class="nav-item">Pedidos Realizados</div></a>
                <a href="{{route('pedido.asignado')}}" ><div class="nav-item">Ver Pedidos</div></a>
                <a href="{{route('Actualizar-PerfilR')}}" ><div class="nav-item">Editar Perfil</div></a>
                <a href="{{route('ver.catalogo')}}" ><div class="nav-item">Ver Catalogo</div></a>
                <a href="{{route('Cerrar-Session')}}" ><div class="nav-item">Cerrar Seccion</div></a>
            </div>

            <!-- Contenedor de las secciones principales -->
            <div class="main-sections">
                <!-- Información Laboral y Estadísticas de Desempeño -->
                <div class="top-sections">
                    <div class="last-orders">
                        <h3>Información Del Vehiculo</h3>
                        <p><strong>Marca:</strong> {{$usuario->fecha_nacimiento}}</p>
                        <p><strong>Modelo:</strong> {{$perfil->vehiculo->modeloV}}</p>
                        <p><strong>Placa:</strong> {{$perfil->vehiculo->placaV}}</p>
                        <p><strong>color:</strong> {{$perfil->vehiculo->colorV}}</p>
                        <p><strong>Tipo:</strong> {{$perfil->vehiculo->tipoV}}</p>
                    </div>

                    <div class="preferences-info">
                        @if($perfil->vehiculo->tipoV === 'Auto')
                            <video class="header-video" autoplay muted loop>
                                <source src="{{url('css/Repartidordelibery/auto.mp4')}}" type="video/mp4">
                            </video>
                        @else
                            <video class="header-video" autoplay muted loop>
                                <source src="{{url('css/Repartidordelibery/moto.mp4')}}" type="video/mp4">
                            </video>
                        @endif
                    </div>
                </div>

                <!-- Pedidos Recientes y Calificación -->
                <div class="bottom-sections">
                    <div class="last-orders">
                       
                    </div>

                    <div class="preferences-info">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript para gráficos circulares -->
    <script src="index.js"></script>
</body>
</html>
