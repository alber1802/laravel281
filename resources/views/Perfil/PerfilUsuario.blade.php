<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Cliente</title>
    <link rel="stylesheet" href="{{asset('css/Perfil/PerfilUsuario.css')}}">
    <!--para el mensaje de confirmacion y errror-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
                <a href="{{route('Home')}}" ><div class="nav-item">Ir Inicio</div></a>
                <a href="{{route('pedidos.Realizados')}}" ><div class="nav-item">Pedidos Realizados</div></a>
                <a href="{{route('Actualizar-PerfilC')}}" ><div class="nav-item">Editar Perfil</div></a>
                <a href="{{route('ver.catalogo')}}" ><div class="nav-item">Ver Catalogo</div></a>
                <a href="{{route('Cerrar-Session')}}" ><div class="nav-item">Cerrar Seccion</div></a>
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
          
            <h3>Productos en tendencia </h3>
        <div class="derecha">
           
        @forelse($productos as $producto)
                <div class="card">
                  <a href="{{route('Ver.Detalle.Producto', ['id' => $producto->id_producto])}} "><div class="image"><img src="{{url($producto->imgP)}}" ></div></a>
                    <span class="title">{{$producto->nombreP}}</span>
                    <span class="price">{{$producto->precioP}}</span>
                </div>
            @empty
                <p>No hay productos con reseñas disponibles.</p>
            @endforelse
        </div>
            <!-- Tendencias para ti -->
           
           

            
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


     <script>
    $(document).ready(function() {
        @if(session('carrito_vacio'))
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
                "timeOut": "5000", // Tiempo en milisegundos
            };
            toastr.warning("{{ session('carrito_vacio') }}", 'Agrega productos!', { timeOut: 12000 });
        @endif

        @if(session('agregar_producto'))
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
                "timeOut": "5000", // Tiempo en milisegundos
            };
            toastr.success("{{ session('agregar_producto') }}");
        @endif
    });

    </script>
</body>
</html>
