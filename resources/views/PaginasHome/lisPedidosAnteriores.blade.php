<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista de pedidos anteriores</title>

	

        <!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="{{ asset('css/productosv2/css/normalize.css') }}" >

<!-- Bootstrap V4.3 -->
<link rel="stylesheet" href="{{ asset('css/productosv2/css/bootstrap.min.css') }}" >

<!-- Bootstrap Material Design V4.0 -->
<link rel="stylesheet" href="{{ asset('css/productosv2/css/bootstrap-material-design.min.css') }}" >

<!-- Font Awesome V5.9.0 -->
<link rel="stylesheet" href="{{ asset('css/productosv2/css/all.css') }}" >

<!-- Sweet Alerts V8.13.0 CSS file -->
<link rel="stylesheet" href="{{ asset('css/productosv2/css/sweetalert2.min.css') }}" >

<!-- Sweet Alert V8.13.0 JS file-->
<script src="{{ asset('js/productosv2/js/sweetalert2.min.js')}}" ></script>

<!-- jQuery Custom Content Scroller V3.1.5 -->
<link rel="stylesheet" href="{{ asset('css/productosv2/css/jquery.mCustomScrollbar.css') }}" >

<!-- General Styles -->
<link rel="stylesheet" href="{{ asset('css/productosv2/css/style.css') }}" >




</head>
<body>
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="{{ asset('imagen/assets/avatar/Avatar.png') }}" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
    					@if (Auth::check())
        				{{ Auth::user()->name }} <br>
        			<small class="roboto-condensed-light">{{ Auth::user()->role }}</small>
    					@else
        			<small class="roboto-condensed-light">Invitado</small>
    					@endif
				</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="client-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-store fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
							<ul>
                                <li>
								    <a href="#"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Productos</a>
								</li>
								<li>
                                    <a href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-briefcase fa-fw"></i> &nbsp; Categoria <i class="fas fa-chevron-down"></i></a>
							<ul>
								
								<li>
                                    <a href="#"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Categoria</a>
								</li>
								<li>
                                    <a href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Categorias</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-truck fa-fw"></i> &nbsp; Pedidos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="reservation-new.html"><i class="fa-solid fa-clipboard fa -fw"></i> &nbsp; Pedidos Pendientes</a>
								</li>
								<li>
									<a href="reservation-list.html"><i class="fas fa-clipboard-check fa-fw"></i> &nbsp; Pedidos Finalizados</a>
								</li>
							</ul>
						</li>

						
					
					</ul>
				</nav>
			</div>
		</section>
		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="user-update.html">
					<i class="fas fa-user-cog"></i>
				</a>
				<a href="#" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>

			<!-- Page header -->
			
             <div class="container-fluid">
            	<div class="container-fluid form-neon">
                    <div class="container-fluid">
					<legend> INFORMACION DE LA ENTREGA DEL PEDIDO</legend>
		<div style="display: flex; justify-content: space-between; align-items: center;">
    		<div>
        		<form action="" style="display: inline-block;">
					<h5 class="text-left" style="text-transform: uppercase;">
					CLIENTE: {{$nombreC}}
					</h5>
        		</form>
    		</div>
		</div>

        <label style="text-transform: uppercase;">FECHA PEDIDO: {{$fechaP}} </label>
<div class="container-fluid">
	<div class="table-responsive">
        <table class="table table-dark table-sm" id="dataTables-example" id="lisPedidos" name="lisPedidos">
    <thead>
        <tr class="text-center">   
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PRECIO UNITARIO</th>
            <th>CANTIDAD</th>               
            <th>DESCUENTO</th>
            <th>TOTAL SIN DESCUENTO</th>
            <th>TOTAL CON DESCUENTO</th>

        </tr>
    </thead>
    <tbody>
        @if(!empty($datos) && count($datos) > 0)
            @foreach($datos as $item)
                <tr class="text-center">
                    <td>{{$item->nombreP}}</td>
                    <td>{{$item->descripcionP}}</td>
                    <td>{{$item->precioP}} Bs</td>
                    <td>{{$item->cantidadPP}}</td>                   
                    <td>{{$item->descuento}} %</td>
                    <td>{{$item->total}} Bs</td> 
                    <td>{{$item->total_Descuento}} Bs</td>  
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="11" class="text-center">No hay productos disponibles</td>
            </tr>
        @endif
    </tbody>
</table>
<div style="display: flex; justify-content: space-between; align-items: center;">
    <div>    
    </div>
    <div>
        <span >TOTAL A PAGAR: </span>{{$totalP}} Bs
    </div>
</div>
</div>			
			</div>	
						<fieldset>
    <div class="container-fluid">
        <div class="row">
            <!-- Fila 1: Fecha de entrega y Repartidor -->
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="fecha_entrega">Fecha de entrega del Pedido</label>
                    <input type="date" class="form-control"  value="{{$datos2->fecha_entrega }}"  name="fecha_entrega" id="fecha_entrega">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prestamo_estado" class="bmd-label-floating">Repartidor</label>
                    <input type="text" class="form-control" value="{{$datos2->nombreRepartidor }}"  >
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Fila 2: Costo, Estado y Tipo de entrega -->
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <label for="costo_entrega" class="bmd-label-floating">Costo de Entrega</label>
                    <input type="text" class="form-control" value="{{$datos2->costo_entrega}}" name="costo_entrega" id="costo_entrega">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <label for="estado_entrega" class="bmd-label-floating">Estado de Entrega</label>
                    <input type="text" class="form-control"  value="{{$datos2->estado_entrega}}" name="estado_entrega" id="estado_entrega">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <label for="tipo_entrega" class="bmd-label-floating">Tipo de Entrega</label>
                    <input type="text" value="{{$datos2->tipo_entrega}}" class="form-control" name="tipo_entrega" id="tipo_entrega">
                </div>
            </div>
        </div>

<div class="row">
    <div class="col-12 col-md-10">
        <div class="form-group">
            <label for="direccion">Dirección de la Entrega</label>
            <div class="input-group">
                <input type="text" value="{{$datos2->direccion_entrega  ?? ''}}"  class="form-control" name="direccion_entrega" id="direccion_entrega" placeholder="Ingresa una dirección">
				
				<!--<button onclick="buscarDireccion()" class="btn btn-raised btn-success btn-sm"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR DIRECCION</button>-->
            </div>
        </div>
    </div>
</div>


		<div class="row">	
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="latitud">Latitud</label>
                    <input type="text" class="form-control" value="{{$datos2->latitud  ?? ''}}" id="latitud" name="latitud" readonly>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="longitud">Longitud</label>
                    <input type="text" class="form-control" value="{{$datos2->longitud ?? '' }}" id="longitud" name="longitud" readonly>
                </div>
            </div>
            <div class="col-12">
                <div id="mapa" style="width: 100%; height: 400px;"></div>
            </div>
        </div>
    </div>
</fieldset>

                    </div>
                </div>
            </div>

		</section>
	</main>
    <script src="{{asset('js/productosv2/js/jquery-3.4.1.min.js') }}" ></script>
    <script>
    document.getElementById('selectAll').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.item-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked; 
        });
    });
</script>

	<!-- popper -->
	<script src="{{asset('js/productosv2/js/popper.min.js') }}" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="{{asset('js/productosv2/js/bootstrap.min.js') }}" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="{{asset('js/productosv2/js/jquery.mCustomScrollbar.concat.min.js') }}" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="{{asset('js/productosv2/js/bootstrap-material-design.min.js') }}" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="{{asset('js/productosv2/js/main.js')}}" ></script>
	<script>
    var mapa;
    var marcador;

    function iniciarMapa() {
		var latitud = parseFloat(document.getElementById('latitud').value) || 0; 
		var longitud = parseFloat(document.getElementById('longitud').value) || 0; 
        var coordenadas = { lat:  latitud, lng: longitud};
        mapa = new google.maps.Map(document.getElementById('mapa'), {
            zoom: 20,
            center: coordenadas
        });

        marcador = new google.maps.Marker({
            map: mapa,
            draggable: false,
            position: coordenadas
        });

        marcador.addListener('dragend', function(event) {
            document.getElementById("latitud").value = this.getPosition().lat();
            document.getElementById("longitud").value = this.getPosition().lng();
        });

        // Autocompletar dirección
        var input = document.getElementById('direccion_entrega');
        var autocomplete = new google.maps.places.Autocomplete(input);
        
        autocomplete.bindTo('bounds', mapa);
        
        autocomplete.addListener('place_changed', function() {
            var lugar = autocomplete.getPlace();
            if (!lugar.geometry) {
                return;
            }
            mapa.setCenter(lugar.geometry.location);
            marcador.setPosition(lugar.geometry.location);
            document.getElementById("latitud").value = lugar.geometry.location.lat();
            document.getElementById("longitud").value = lugar.geometry.location.lng();
            document.getElementById("direccionOculta").value = document.getElementById("direccion_entrega").value; // Guardar la dirección en el campo oculto
        });
    }

    function buscarDireccion() {
        var direccion = document.getElementById('direccion_entrega').value;
        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({ 'address': direccion }, function(results, status) {
            if (status === 'OK') {
                mapa.setCenter(results[0].geometry.location);
                marcador.setPosition(results[0].geometry.location);
                document.getElementById("latitud").value = results[0].geometry.location.lat();
                document.getElementById("longitud").value = results[0].geometry.location.lng();
                document.getElementById("direccionOculta").value = direccion_entrega; // Guardar la dirección en el campo oculto
            } else {
                alert('No se pudo encontrar la dirección: ' + status);
            }
        });
    }

   function guardarCoordenadas() {
    var latitud = document.getElementById('latitud').value;
    var longitud = document.getElementById('longitud').value;
    var direccion_entrega = document.getElementById('direccion_entrega').value; // Obtener la dirección

    // Validar que las coordenadas y la dirección no estén vacías
    if (!latitud || !longitud || !direccion_entrega) {
        alert("Por favor, busca una dirección primero.");
        return;
    }

    // Enviar coordenadas y dirección al script PHP
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "conexion.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert("Coordenadas y dirección guardadas con éxito.");
        }
    };
    xhr.send("latitud=" + latitud + "&longitud=" + longitud + "&direccion_entrega=" + encodeURIComponent(direccion_entrega)); // Agregar dirección aquí
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXNCKw3k07Z0QLw2GOuPjajvS0psHVCX0&libraries=places&callback=iniciarMapa" async defer></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>