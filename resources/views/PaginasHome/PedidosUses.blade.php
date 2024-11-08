<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Pedidos</title>
    <link rel="shortcut icon" href="{{asset('imagen/logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('imagen/logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/PedidosR.css')}}">
</head>
<body>
    <div class="container">
        <h1 class="title">Historial de Pedidos</h1>

        <table class="pedido-table">
            <thead>
            <tr>
                    <th>Total a Pagado</th>
                    <th>Fecha del Pedido</th>
                    <th>Estado</th>
                    <th>Estado de Entrega</th>
                    <th>Cantidad</th>
                    <th>Nombre Producto</th>
                    <th>Descripción</th>
                    <th>Material</th>
                    <th>Precio Unitario</th>
                    <th>Color</th>
                    <th>Tipo</th>
                    <th>Imagenes</th>
                    <th>Descuento Producto</th>
                    <th>Costo de Envío</th>
                    <th>Tiempo de Entrega</th>
                    <th>Devolución</th>
                    <th>Nombre Categoría</th>
                    <th>Descripción Categoría</th>
                    <th>Nombre Completo Artesano </th>
                    <th>Email Artesano</th>
                    <th>Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
            @if(!empty($pedidos) && count($pedidos) > 0)
                @foreach ($pedidos as $pedido)
                    @if($pedido->estado_entrega === 'pendiente')
                        <tr>
                        <td>{{ $pedido->total_pagar }} bs</td>
                            <td>{{ $pedido->fecha_pedido }}</td>
                            <td>{{ $pedido->estadoP === 'Terminado' ? 'Cancelado' : 'No Cancelado' }}</td>
                            <td>{{ $pedido->estado_entrega}}</td>
                            <td>{{ $pedido->cantidadPP }}</td>
                            <td>{{ $pedido->nombreP }}</td>
                            <td>{{ $pedido->descripcionP }}</td>
                            <td>{{ $pedido->materialP }}</td>
                            <td>{{ $pedido->precioP }}</td>
                            <td>{{ $pedido->colorP }}</td>
                            <td>{{ $pedido->tipoP }}</td>
                            <td>
                                <img src="{{ $pedido->imgP }}" alt="Producto Imagen 1" width="50">
                                <img src="{{ $pedido->imgP2 }}" alt="Producto Imagen 2" width="50">
                                <img src="{{ $pedido->imgP3 }}" alt="Producto Imagen 3" width="50">
                            </td>
                            <td>{{ $pedido->descuentoP }} %</td>
                            <td>{{ $pedido->costoEnvio }} bs </td>
                            <td>{{ $pedido->tiempoEntrega }} dias </td>
                            <td>{{ $pedido->devolucionP }}</td>
                            <td>{{ $pedido->nombreCa }}</td>
                            <td>{{ $pedido->descripcionCa }}</td>
                            <td>{{ $pedido->nombreCompleto }}</td>
                            <td>{{ $pedido->email }}</td>
                            <td>
                                <p class="time-elapsed" data-created-at="{{ strtotime($pedido->created_at) * 1000 }}">Calculando...</p>
                            </td>
                        </tr> 
                    @endif                 
                @endforeach
                @else
                    <tr>
                        <td colspan="21" class="text-center">No tiene Pedidos Entregados</td>
                    </tr>
            @endif
            </tbody>
        </table>
    </div>
    <div class="container">
        <h1 class="title">Pedidos Entregados</h1>

        <table class="pedido-table">
            <thead>
            <tr>
                    <th>Total a Pagado</th>
                    <th>Fecha del Pedido</th>
                    <th>Estado</th>
                    <th>Estado de Entrega</th>
                    <th>Cantidad</th>
                    <th>Nombre Producto</th>
                    <th>Descripción</th>
                    <th>Material</th>
                    <th>Precio Unitario</th>
                    <th>Color</th>
                    <th>Tipo</th>
                    <th>Imagenes</th>
                    <th>Descuento Producto</th>
                    <th>Costo de Envío</th>
                    <th>Tiempo de Entrega</th>
                    <th>Devolución</th>
                    <th>Nombre Categoría</th>
                    <th>Descripción Categoría</th>
                    <th>Nombre Completo Artesano </th>
                    <th>Email Artesano</th>
                    <th>Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
                @if(!empty($pedidos) && count($pedidos) > 0 && $pedido->estado_entrega === 'Entregado')
                    @foreach ($pedidos as $pedido)
                            <tr>
                                <td>{{ $pedido->total_pagar }} bs</td>
                                <td>{{ $pedido->fecha_pedido }}</td>
                                <td>{{ $pedido->estadoP === 'Terminado' ? 'Cancelado' : 'No Cancelado' }}</td>
                                <td>{{ $pedido->estado_entrega}}</td>
                                <td>{{ $pedido->cantidadPP }}</td>
                                <td>{{ $pedido->nombreP }}</td>
                                <td>{{ $pedido->descripcionP }}</td>
                                <td>{{ $pedido->materialP }}</td>
                                <td>{{ $pedido->precioP }}</td>
                                <td>{{ $pedido->colorP }}</td>
                                <td>{{ $pedido->tipoP }}</td>
                                <td>
                                    <img src="{{ $pedido->imgP }}" alt="Producto Imagen 1" width="50">
                                    <img src="{{ $pedido->imgP2 }}" alt="Producto Imagen 2" width="50">
                                    <img src="{{ $pedido->imgP3 }}" alt="Producto Imagen 3" width="50">
                                </td>
                                <td>{{ $pedido->descuentoP }} %</td>
                                <td>{{ $pedido->costoEnvio }} bs </td>
                                <td>{{ $pedido->tiempoEntrega }} dias </td>
                                <td>{{ $pedido->devolucionP }}</td>
                                <td>{{ $pedido->nombreCa }}</td>
                                <td>{{ $pedido->descripcionCa }}</td>
                                <td>{{ $pedido->nombreCompleto }}</td>
                                <td>{{ $pedido->email }}</td>
                                <td>
                                    <p class="time-elapsed" data-created-at="{{ strtotime($pedido->created_at) * 1000 }}">Calculando...</p>
                                </td>
                            </tr>
                    @endforeach
                @else
                                <tr>
                                        <td colspan="21" class="text-center">No tiene Pedidos Entregados</td>
                                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <script>
        function calculateTimeElapsed() {
            const now = Date.now();
            const timeElements = document.querySelectorAll('.time-elapsed');

            timeElements.forEach(el => {
                const createdAtTimestamp = parseInt(el.getAttribute('data-created-at'));
                const diff = now - createdAtTimestamp;

                const minutes = Math.floor((diff / (1000 * 60)) % 60);
                const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                const days = Math.floor(diff / (1000 * 60 * 60 * 24));

                let timeElapsed = "";
                if (days > 0) timeElapsed += `${days} día(s), `;
                if (hours > 0 || days > 0) timeElapsed += `${hours} hora(s), `;
                timeElapsed += `${minutes} minuto(s)`;

                el.textContent = timeElapsed;
            });
        }

        // Calcula y actualiza el tiempo transcurrido cada minuto
        calculateTimeElapsed();
        setInterval(calculateTimeElapsed, 60000);
    </script>
</body>
</html>
