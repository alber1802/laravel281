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
					<img src="{{$artesano->user->url}}" class="img-fluid" alts="Avatar">
					<figcaption class="roboto-medium text-center">
					{{$artesano->user->name}} <br><small class="roboto-condensed-light">Alias : {{$artesano->user->nombre}}</small>
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
								    <a href="{{ route('agregarProductos') }}"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Productos</a>
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
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS DEL ARTESANO
				</h3>
				<p class="text-justify">
                Lista de Productos del Artesano" es una funcionalidad que permite mostrar todos los productos que un artesano específico ha publicado en la plataforma. Esta lista es útil tanto para los consumidores que desean conocer la oferta de un artesano, como para el propio artesano para gestionar y visualizar sus productos.
				</p>
			</div>
			
			<div class="container-fluid">
                       
                        
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
					
					<a href="{{ route('agregarProductos') }}">
    				<i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO PRODUCTO
					</a>

					</li>
					<li>
						<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTO</a>
					</li>
				</ul><div>
                            <h4><i class="fas fa-user"></i><span class="roboto-medium">&nbsp; </span> 
                  			<form action="" style="display: inline-block !important;">
							     {{ $artesano->user->name }} 
								 {{ $artesano->user->paterno }}  
								 {{ $artesano->user->materno }} </h4>
                             
                            </form>
                        </div>	
			</div>
			
			<!-- Content -->
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm" id="dataTables-example" id="listaProductos" name="listaProd">
    <thead>
        <tr class="text-center roboto-medium">
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PRECIO</th>
            <th>STOCK</th>
            <th>CATEGORIA</th>
            
            <th>FECHA PUBLICACION</th>
			<th>PRODUCTO</th>
            <th>ACTUALIZAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
	@if(!empty($datos) && count($datos) > 0)
            @foreach($datos as $item)
                 <!-- Asegúrate de acceder a productos aquí -->
                    <tr class="text-center">
                        <td>{{ $item->producto->nombreP }}</td>
                        <td>{{ $item->producto->descripcionP }}</td>
                        <td>{{ $item->producto->precioP }} Bs</td>
                        <td>{{ $item->producto->stock }}</td>
                        <td>{{ $item->producto->categoria ? $item->producto->categoria->nombreCa : 'Sin categoría' }}</td>
                        <td>{{ $item->fechaP }}</td>
                        <td><img src="{{  asset($item->producto->imgP) }}" style="max-width: 100px; max-height: 100px;"></td>
                        <!-- Storage::url($item->producto->imgP) esto va enves de asset -->
						<td>
						<a href="{{ route('productos.editar', $item->producto->id_producto) }}" title="Modificar el producto {{ $item->producto->nombreP }}"  class="btn btn-success">

                                <i class="fas fa-sync-alt"></i>
                            </a>
                        </td>
                        <td>

						<a data-toggle="modal" data-target="#ModalCliente{{ $item->producto->id_producto }}" 
							class="btn btn-warning" 
							title="Eliminar el producto {{ $item->producto->nombreP }}" 
							data-id="{{ $item->producto->id_producto }}" 
							data-nombre="{{ $item->producto->nombreP }}">
								<i class="far fa-trash-alt"></i> 
						</a>

						<!-- Modal -->
						<div class="modal fade" id="ModalCliente{{ $item->producto->id_producto }}" tabindex="-1" role="dialog" aria-labelledby="ModalCliente{{ $item->producto->id_producto }}" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<form name="eliminarP" class="form-neon" action="{{ route('eliminarP', $item->producto->id_producto )}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="modal-body">
											<div class="container-fluid">
												<div class="form-group">
													<label id="productoNombre">¿Esta seguro que desea eliminar el producto {{ $item->producto->nombreP }}?</label>
												</div>
											</div>
											<br>
										</div>
										<div class="modal-footer" style="justify-content: center;">
											<button type="submit" class="btn btn-danger btn-sm">
											<i class="far fa-trash-alt"></i>  &nbsp; ELIMINAR
											</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</tr>
                
            @endforeach
        @else
            <tr>
                <td colspan="8" class="text-center">No hay productos disponibles</td>
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