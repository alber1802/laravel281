<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Repartidor</title>
    <link rel="stylesheet" href="{{asset('css/Perfil/PerfilRepartidor.css')}}">
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
                <div class="nav-item">Inicio</div>
                <div class="nav-item">Pedidos</div>
                <div class="nav-item">Reseñas</div>
                <div class="nav-item">Notificaciones</div>
                <div class="nav-item"><a href="{{route('ActualizarRepartidor')}}" >Editar Perfil</a></div>
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
                        <h3>Estadísticas de Desempeño</h3>
                        <div class="circle-container">
                            <div class="circular-progress" data-percentage="98">
                                <span class="percentage">98%</span>
                                <span class="label">Puntualidad</span>
                            </div>
                            <div class="circular-progress" data-percentage="95">
                                <span class="percentage">95%</span>
                                <span class="label">Aceptación</span>
                            </div>
                            <div class="circular-progress" data-percentage="2">
                                <span class="percentage">2%</span>
                                <span class="label">Cancelación</span>
                            </div>
                        </div>
                        <p><strong>Distancia recorrida:</strong> 500 km</p>
                    </div>
                </div>

                <!-- Pedidos Recientes y Calificación -->
                <div class="bottom-sections">
                    <div class="last-orders">
                        <h3>Pedidos Recientes</h3>
                        <p><strong>Pedido 1:</strong> Calle Falsa 123</p>
                        <p><strong>Estado:</strong> Entregado</p>
                        <p><strong>Pedido 2:</strong> Avenida Siempre Viva 742</p>
                        <p><strong>Estado:</strong> En camino</p>
                        <p><strong>Pedido 3:</strong> Calle Prueba 456</p>
                        <p><strong>Estado:</strong> Pendiente</p>
                    </div>

                    <div class="preferences-info">
                        <h3>Calificación</h3> <!-- Cambiado de Reseñas a Calificación -->
                        <div class="review-item">
                            <p><strong>Reseña 1</strong></p>
                            <p>★★★★★</p>
                            <p><strong>Fecha:</strong> 12/09/2023</p>
                        </div>
                        <div class="review-item">
                            <p><strong>Reseña 2</strong></p>
                            <p>★★★★☆</p>
                            <p><strong>Fecha:</strong> 10/08/2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript para gráficos circulares -->
    <script src="index.js"></script>
</body>
</html>
