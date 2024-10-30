<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista artesanos</title>

	

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
					<img src="{{route(asset('$item->user->url'))}}" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<!--
						<li>
							<a href="home.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Artesanos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Artesanos</a>
								</li>
								<li>
									<a href="client-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Artesanos</a>
								</li>
								<li>
									<a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Artesanos</a>
								</li>
							</ul>
						</li>-->
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
								</li>
								<li>
									<a href="client-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
								<li>
									<a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
							<ul>
                                <li>
								    <a href="#"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Productos</a>
								</li>
								<li>
                                    <a href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Productos</a>
								</li>
							</ul>
						</li>
<!--
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Artesanos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="reservation-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Artesanos</a>
								</li>
								<li>
									<a href="reservation-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Artesanos</a>
								</li>
								<li>
									<a href="reservation-search.html"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar Artesanos</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="user-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
								</li>
								<li>
									<a href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="company.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
						</li>-->
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
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ARTESANO
				</h3>
				<p class="text-justify">
				El módulo "Lista de Artesanos" está diseñado para gestionar y visualizar información sobre artesanos que forman parte de una plataforma de e-commerce o un sistema de gestión de productos artesanales. Este módulo facilita la administración de datos relacionados con cada artesano, permitiendo a los administradores y usuarios acceder a información detallada sobre su comunidad, especialidades, descripciones de productos y calificaciones.
				</p>
			</div>
			
			<div class="container-fluid">
                       
                        
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="user-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO ARTESANO</a>
					</li>
					<li>
						<a class="active" href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ARTESANO</a>
					</li>
					<li>
						<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR ARTESANO</a>
					</li>
				</ul>
			</div>
			
			<!-- Content -->
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm" id="dataTables-example" id="listaArtesanos" name="listaArtesanos">
						<thead>
							<tr class="text-center roboto-medium">
								<th>NOMBRE</th>
                                <th>COMUNIDAD</th>
								<th>ESPECIALIDAD</th>							
								<th>CALIFICACION</th>
                                <th>DETALLES</th>
							</tr>
						</thead>
						<tbody>
                        @if(!empty($datos) && count($datos) > 0)
                        @foreach($datos as $item)
							<tr class="text-center" >
								<th>  {{ $item->user->nombre }} {{ $item->user->paterno }} {{ $item->user->materno }} </th>
								<th>{{ $item->comunidad->nombreCo }}</th>
								<th>{{ $item->especialidadA }} </th>
                                <th>{{ $item->calificacionA }} </th>
								<td>
									<a href="{{route('lista.ProductosArtesanos', $item->id_artesano) }}" class="btn btn-success" title='Visualizar los productos del {{ $item->user->nombre }}'  >
	  									<i class="fas fa-eye"></i>	
									</a>
								</td>
							</tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="text-center">No hay artesanos disponibles</td>
                            </tr>
                            @endif
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Anterior</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Siguiente</a>
						</li>
					</ul>
				</nav>
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