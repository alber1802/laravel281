<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Delivery</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="{{asset('css/Repartidordelibery/RepartidorEntregas.css')}}">
    <link rel="shortcut icon" href="{{asset('imagen/logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('imagen/logo.png')}}">
</head>
<body>
    <header>
        <video class="header-video" autoplay muted loop>
            <source src="{{url('css/Repartidordelibery/videoartesano.mp4')}}" type="video/mp4">
           
        </video>
    </header>

    <aside>
       
        <ul>
            <li><button onclick="window.location.href='{{route('PerfilUsuario')}}'">Volver a Perfil</button></li>
            <li><button onclick="window.location.href='#Pediente'">Pendiente</button></li>
            <li><button onclick="window.location.href='#Entregado'">Entregado</button></li>
        </ul>

    </aside>

    <main>
        <section class="order-list" id="Pediente">
            <h2>Órdenes Pendientes</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre de Cliente</th>
                        <th>Dirección de entrega</th>
                        <th>Nombre Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Tipo de entrega</th>
                        <th>Costo de entrega</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="orderTable">
                    @if(!empty($datos) && count($datos) > 0)
                        @foreach($datos as $item)
                            @if($item->estado_entrega === 'pendiente') <!-- Filtrar solo pendientes -->
                               
                                <tr>
                                    <td>{{ $item->name }} {{ $item->paterno }} {{ $item->materno }}</td>
                                    <td>{{ $item->direccion_entrega }}</td>
                                    <td>{{ $item->nombreP }}</td>
                                    <td>{{ $item->cantidadPP }}</td>
                                    <td>{{ $item->precioP }}</td>
                                    <td>{{ $item->tipo_entrega }}</td>
                                    <td>{{ $item->costo_entrega }}</td>
                                    <td>
                                       <!-- Botón para ver detalles -->
                                            <button onclick="viewDetails(
                                                '{{ $item->fecha_entrega }}', 
                                                '{{ $item->telefono }}', 
                                                '{{ $item->email }}', 
                                                '{{ $item->estado_entrega }}', 
                                                '{{ $item->descripcionP}}', 
                                                '{{ $item->tipoP }}', 
                                                '{{ $item->colorP}}',
                                                '{{ $item->descuentoP}}',
                                                '{{ $item->materialP}}',
                                                '{{ $item->tiempoEntrega}}',
                                                '{{ $item->fecha_pedido}}',
                                                '{{ $item->estadoP}}'
                                            )">Ver Detalles</button>

                                            <!-- Botón para ver mapa -->
                                            <button onclick="viewMap({{ $item->latitud }}, {{ $item->longitud }})">Ver Mapa</button>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                        <td colspan="8" class="text-center">No tiene entregas pendientes</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

            
                </tbody>
            </table>
        </section>

        <section class="order-details" id="orderDetails">
            <h2>Detalles de la Orden</h2>
            <div id="orderInfo">
                <p>Selecciona una orden para ver los detalles aquí.</p>
            </div>
        </section>

        <section class="map-section">
            <h2>Mapa de Entrega</h2>
            <div id="map"></div>
        </section>

        <section class="delivery-summary" id="Entregado">
            <h2>Resumen de Entregas</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre de Cliente</th>
                        <th>Dirección de entrega</th>
                        <th>Nombre Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Tipo de entrega</th>
                        <th>Costo de entrega</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="orderTable">
                    @if(!empty($datos) && count($datos) > 0 && $item->estado_entrega === 'Entregado')
                        @foreach($datos as $item)
                            @if($item->estado_entrega === 'Entregado') <!-- Filtrar solo pendientes -->
                               
                                <tr>
                                    <td>{{ $item->name }} {{ $item->paterno }} {{ $item->materno }}</td>
                                    <td>{{ $item->direccion_entrega }}</td>
                                    <td>{{ $item->nombreP }}</td>
                                    <td>{{ $item->cantidadPP }}</td>
                                    <td>{{ $item->precioP }}</td>
                                    <td>{{ $item->tipo_entrega }}</td>
                                    <td>{{ $item->costo_entrega }}</td>
                                    <td>
                                       <!-- Botón para ver detalles -->
                                            <button onclick="viewDetails(
                                                '{{ $item->fecha_entrega }}', 
                                                '{{ $item->telefono }}', 
                                                '{{ $item->email }}', 
                                                '{{ $item->estado_entrega }}', 
                                                '{{ $item->descripcionP}}', 
                                                '{{ $item->tipoP }}', 
                                                '{{ $item->colorP}}',
                                                '{{ $item->descuentoP}}',
                                                '{{ $item->materialP}}',
                                                '{{ $item->tiempoEntrega}}',
                                                '{{ $item->fecha_pedido}}',
                                                '{{ $item->estadoP}}'
                                            )">Ver Detalles</button>

                                            <!-- Botón para ver mapa -->
                                            <button onclick="viewMap({{ $item->latitud }}, {{ $item->longitud }})">Ver Mapa</button>
                                    </td>
                                </tr>
    
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" class="text-center">No tiene entregas Terminadas</td>
                        </tr>
                    @endif

            
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Plataforma de E-commerce</p>
    </footer>

    

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
   
    <script>
        // Inicializa el mapa y establece una ubicación inicial (puede ser una posición predeterminada)
        var map = L.map('map').setView([-16.5, -68.15], 13); // Ejemplo en La Paz, Bolivia

        // Añade el mapa de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Variable para el marcador
        var marker;

        // Función para mostrar el mapa con nuevas coordenadas
        function viewMap(lat, lon) {
            // Si ya hay un marcador, se elimina
            if (marker) {
                map.removeLayer(marker);
            }

            // Establecer la vista del mapa en las coordenadas proporcionadas
            map.setView([lat, lon], 13);

            // Crear un nuevo marcador en las coordenadas y añadirlo al mapa
            marker = L.marker([lat, lon]).addTo(map)
                .bindPopup('Ubicación de entrega')
                .openPopup();
        }


        function viewDetails(fechaEntrega, telefono, email, estadoEntrega, descripcionP, tipoP, colorP, descuentoP, materialP, tiempoEntrega, fecha_pedido, estadoP) {
        console.log("Function called with values:", fechaEntrega, telefono, email, estadoEntrega); // Agrega más si es necesario
        const orderInfo = `
            <div class="order-details-grid">
                <div><strong>Fecha de Entrega:</strong> ${fechaEntrega}</div>
                <div><strong>Teléfono Cliente:</strong> ${telefono}</div>
                <div><strong>Email Cliente:</strong> ${email}</div>
                <div><strong>Estado de Entrega:</strong> ${estadoEntrega}</div>
                <div><strong>Descripción Producto:</strong> ${descripcionP}</div>
                <div><strong>Tipo Producto:</strong> ${tipoP}</div>
                <div><strong>Color Producto:</strong> ${colorP}</div>
                <div><strong>Descuento Producto:</strong> ${descuentoP}</div>
                <div><strong>Material Producto:</strong> ${materialP}</div>
                <div><strong>Tiempo de Entrega:</strong> ${tiempoEntrega} dias </div>
                <div><strong>Fecha de Pedido:</strong> ${fecha_pedido}</div>
                <div><strong>Estado de Pago:</strong> ${estadoP}</div>
            </div>
        `;

        const orderInfoContainer = document.getElementById('orderInfo');
        orderInfoContainer.innerHTML = orderInfo;

        // Animación de entrada
        orderInfoContainer.classList.add('fade-in');
        setTimeout(() => {
            orderInfoContainer.classList.remove('fade-in');
        }, 500);
    }




    </script>
</body>
</html>

