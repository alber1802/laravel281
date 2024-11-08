<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista productos</title>

	

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

					<img src="{{url( Auth::user()->url) }}" class="img-fluid" alt="Avatar">
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
									<a href="{{ route('lisClientes') }}"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-store fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
							<ul>
                                <li>
								    <a href="{{ route('agregarProductos') }}"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Productos</a>
								</li>
								<li>
                                    <a href="{{ route('lisPublica') }}"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-briefcase fa-fw"></i> &nbsp; Categoria <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
                                    <a href="{{ route('lisCategoria') }}"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Categorias</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-truck fa-fw"></i> &nbsp; Pedidos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="{{ route('lista.PedidosArtesanos') }}"><i class=""></i> &nbsp; Lista de Pedidos Pendientes</a>
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
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES
				</h3>
			</div>
			<div class="container-fluid">
                       
                        
				<ul class="full-box list-unstyled page-nav-tabs">	
					<li>
						<a href="{{ route('lista.PedidosArtesanos') }}"><i class="fas fa-shopping-cart fa-fw"></i> &nbsp; PEDIDOS </a>
					</li>

				</ul>

			</div>
			<!-- Content -->
			<div class="container-fluid">
				<div class="table-responsive">
					<!-- Content -->
			<div class="full-box tile-container">


					<table class="table table-dark table-sm" id="dataTables-example" id="lisClientes" name="lisClientes">
    <thead>
        <tr class="text-center ">
            <th>NOMBRE CLIENTE</th>
            <th>TELEFONO</th>
            <th>DIRECCION</th>
            <th>GENERO</th>
            <th>EDAD</th>
            
        <th>EMAIL</th>
			<th>PREFERENCIA</th>
        </tr>
    </thead>
    <tbody>
	@if(!empty($datos) && count($datos) > 0)
    @foreach($datos as $item)
            <tr class="text-center">
                <td>{{ $item->nombreCliente }}</td>
                <td>{{ $item->telefono }} Bs</td>
                <td>{{ $item->direccion }}</td>
                <td>{{ $item->sexo }}</td>
                <td>{{ $item->edad }}</td>
                <td>{{ $item->email }} Bs</td>
                <td>{{ $item->preferencia }}</td>
                  
            </tr>
    @endforeach
@else
    <tr>
        <td colspan="8" class="text-center">No hay clientes disponibles</td>
    </tr>
@endif

				</div>
			
			</div>

		</section>
	
	</main>

    <script src="{{asset('js/productosv2/js/jquery-3.4.1.min.js') }}" ></script>

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

</body>
</html>