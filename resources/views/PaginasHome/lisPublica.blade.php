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

					<img src="{{ asset('imagen/assets/avatar/Avatar.png') }}" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
    					@if (Auth::check())
        				{{ Auth::user()->name }} <br>
        			<small class="roboto-condensed-light">{{ Auth::user()->role }}</small>
    					@else
        			<small class="roboto-condensed-light">Invitado</small>
    					@endif
				</figcaption>

					<img src="{{$artesano->user->url}}" class="img-fluid" alts="Avatar">
					<figcaption class="roboto-medium text-center">
					{{$artesano->user->name}} <br><small class="roboto-condensed-light">Alias : {{$artesano->user->nombre}}</small>
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
								    <a href="{{ route('agregarProductos') }}"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Productos</a>
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
						<a href="{{ route('agregarProductos') }}"><i class="fas fa-plus fa-fw"></i> &nbsp; ADICIONAR PRODUCTO</a>
					</li>
					<a href="{{ route('agregarProductos') }}">
    				<i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO PRODUCTO
					</a>

					</li>
					<li>
						<a href="{{ route('lista.PedidosArtesanos') }}"><i class="fas fa-shopping-cart fa-fw"></i> &nbsp; PEDIDOS </a>
					</li>

				</ul>

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
					<!-- Content -->
			<div class="full-box tile-container">


					<table class="table table-dark table-sm" id="dataTables-example" id="listaProductos" name="listaProd">
    <thead>
        <tr class="text-center ">
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>STOCK</th>
           <!-- <th>CATEGORIA</th>-->
            
            <th>FECHA PUBLICACION</th>
			<th>PRODUCTO</th>
            <th>ACTUALIZAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
	@if(!empty($datos) && count($datos) > 0)
            @foreach($datos as $item)

                @foreach($item->productos as $producto) 
                    <tr class="text-center">
                        <td>{{ $producto->nombreP }}</td>
                        <td>{{ $producto->precioP }} Bs</td>
                        <td>{{ $producto->stock }}</td>
                       <!-- <td>{{ $producto->categoria ? $producto->categoria->nombreCa : 'Sin categoría' }}</td>-->
                        <td>{{ $item->fechaP }}</td>
                        <td>
						<div id="carousel-{{ $producto->id_producto }}" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner">
        @if($producto->imgP)
            <div class="carousel-item active">
                <img src="{{ Storage::url($producto->imgP) }}" class="d-block w-100" alt="Imagen del producto {{ $producto->nombreP }}" style="max-height: 100px;">
            </div>
        @endif
        @if($producto->imgP2)
            <div class="carousel-item">
                <img src="{{ Storage::url($producto->imgP2) }}" class="d-block w-100" alt="Imagen del producto {{ $producto->nombreP }}" style="max-height: 100px;">
            </div>
        @endif
        @if($producto->imgP3)
            <div class="carousel-item">
                <img src="{{ Storage::url($producto->imgP3) }}" class="d-block w-100" alt="Imagen del producto {{ $producto->nombreP }}" style="max-height: 100px;">
            </div>
        @endif
    </div>
    <a class="carousel-control-prev" href="#carousel-{{ $producto->id_producto }}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-{{ $producto->id_producto }}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


						</td>
                        <td>
						<a href="{{ route('productos.editar', $producto->id_producto) }}" title="Modificar el producto {{ $producto->nombreP }}"  class="btn btn-success">
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