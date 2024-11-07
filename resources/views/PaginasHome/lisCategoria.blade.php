<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista categoria</title>

	

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
							<a href="{{route('dashboard') }}"><i class="fas fa-home"></i> &nbsp; Dashboard Administrador</a>
						
						</li>
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
									<a href="#"><i class="{{ route('lista.PedidosArtesanos') }}"></i> &nbsp; Lista de Pedidos Pendientes</a>
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
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CATEGORIA DEL ARTESANO
				</h3>
			</div>
			<div class="container-fluid">
                       
                        
				<ul class="full-box list-unstyled page-nav-tabs">
			
                    <li>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCategoria"><i class="fas fa-plus fa-fw"></i> &nbsp; ADICIONAR NUEVA CATEGORIA </button>
					</li>

				</ul>
			</div>
			<!-- Content -->
			<div class="container-fluid">
				<div class="table-responsive">
					<!-- Content -->
			<div class="full-box tile-container">


					<table class="table table-dark table-sm" id="dataTables-example" id="listaProductos" name="listaProd">
    <thead>
        <tr class="text-center "> 
            <th>FECHA DE CREACION</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>ACTUALIZAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
	@if(!empty($datos) && count($datos) > 0)
        @foreach($datos as $item)
            <tr class="text-center">
                <td>{{ $item->created_at}}</td>
                <td>{{ $item->nombreCa }}</td>
                <td>{{ $item->descripcionCa }}</td>
                
                <td>
    <a data-toggle="modal" data-target="#editarCategoria{{ $item->id_categoria }}" 
       class="btn btn-warning" 
       title="Editar la categoria {{ $item->nombreCa }}" 
       data-id="{{ $item->id_categoria }}" 
       data-nombre="{{ $item->nombreCa }}" 
       data-descripcion="{{ $item->descripcionCa }}">
        <i class="far fa-edit"></i> 
    </a>

    <!-- Modal -->
    <div class="modal fade" id="editarCategoria{{ $item->id_categoria }}" tabindex="-1" role="dialog" aria-labelledby="editarCategoriaLabel{{ $item->id_categoria }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form name="editarCa" class="form-neon" action="{{ route('editarC', $item->id_categoria) }}" method="POST" enctype="multipart/form-data"> 
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="editarCategoriaLabel{{ $item->id_categoria }}">Editar Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="nombreCa" class="bmd-label-floating">Nombre de la Categoria</label>
                                <input type="text" class="form-control" name="nombreCa" id="nombreCa" value="{{ $item->nombreCa }}">
                            </div>
                            <div class="form-group">
                                <label for="descripcionCa" class="bmd-label-floating">Descripcion de la Categoria</label>
                                <input type="text" class="form-control" name="descripcionCa" id="descripcionCa" value="{{ $item->descripcionCa }}">
                            </div>
                            <input type="hidden" name="id_categoria" value="{{ $item->id_categoria }}">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; MODIFICAR</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</td>

                
                <td>
                    <a data-toggle="modal" data-target="#ModalCliente{{  $item->id_categoria}}" 
                       class="btn btn-warning" 
                       title="Eliminar la categoria {{ $item->nombreCa }}" 
                       data-id="{{  $item->id_categoria }}" 
                       data-nombre="{{  $item->nombreCa}}">
                        <i class="far fa-trash-alt"></i> 
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="ModalCliente{{  $item->id_categoria }}" tabindex="-1" role="dialog" aria-labelledby="ModalCliente{{  $item->id_categoria }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form name="eliminarC" class="form-neon" action="{{route('eliminarC', $item->id_categoria)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="form-group">
                                                <label id="productoNombre">¿Está seguro que desea eliminar la categoria {{ $item->nombreCa}}?</label>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="modal-footer" style="justify-content: center;">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="far fa-trash-alt"></i> &nbsp; ELIMINAR
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
@else
    <tr>
        <td colspan="8" class="text-center">No hay categorias disponibles</td>
    </tr>
@endif

				</div>
			
			</div>

		</section>
        <form name="registroA" class="form-neon" action="{{route('validar-registerC') }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
        <div class="modal fade" id="ModalCategoria" tabindex="-1" role="dialog" aria-labelledby="ModalCategoria" aria-hidden="true">
           
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalCategoria">Agregar categoria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="nombreCa" class="bmd-label-floating">Nombre de la Categoria</label>
                                    <input type="text" class="form-control" name="nombreCa" id="nombreCa" >
                                </div>
                                <div class="form-group">
                                    <label for="descripcionCa" class="bmd-label-floating">Descripcion de la Categoria</label>
                                    <input type="text" class="form-control" name="descripcionCa" id="descripcionCa">
                                </div>

                            </div>
                            <br>
  
                        </div>
                        
                        <div class="modal-footer">
                        <button type="submit"  class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                        </div>
                    </form>
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