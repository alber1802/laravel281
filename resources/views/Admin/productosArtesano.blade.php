<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/Administrador/main.css')}}">
	<link rel="shortcut icon" href="{{asset('imagen/logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('imagen/logo.png')}}">
</head>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				COMMCRAFT <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="{{ asset('imagen/logo.png') }}" alt="UserIcon">
					<figcaption class="text-center text-titles">User Name</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administracion <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="period.html"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Period</a>
						</li>
						<li>
							<a href="subject.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Subject</a>
						</li>
						<li>
							<a href="section.html"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Section</a>
						</li>
						<li>
							<a href="salon.html"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Salon</a>
						</li>
						<li>
							<a href="{{ route('NuevaCategoria') }}"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Categoria</a>
						</li>
						<li>
							<a href="{{ route('NuevaComunidad') }}"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Comunidad</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Crear Usuario <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="{{ route('NuevoCliente') }}">
								<i class="zmdi zmdi-account zmdi-hc-fw"></i> Cliente
							</a>
							<!--<a href="#"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Clientes</a>-->
						</li>
						<li>
							<a href="{{ route('NuevoArtesano') }}">
								<i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Artesano
							</a>
							<!--<a href="#"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Artesano</a>-->
						</li>
						<li>
						<a href="{{ route('NuevoRepartidor') }}">
							<i class="zmdi zmdi-face zmdi-hc-fw"></i> Repartidor
						</a>
							<!--<a href="#"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Repartido</a>-->
						</li>
	
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> Metodos de Pago <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="registration.html"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registration</a>
						</li>
						<li>
							<a href="payments.html"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Settings School <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="school.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>Lista de Usuarios y productos</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Administracion <small>COMMCRAFT</small></h1>
			</div>
			<p class="lead">La administración del sistema organiza y controla, optimizando la experiencia de compra para el cliente.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="tab-content">
						
						@if($productos->isEmpty())
							<div class="alert alert-warning">
								<strong>No hay productos disponibles para este artesano.</strong>
							</div>
						@else
						<h2>Productos del Artesano: {{ $productos[0]->name }} {{ $productos[0]->paterno }} {{ $productos[0]->materno }}</h2>
							<div class="table-responsive">  <!-- Contenedor para el desplazamiento -->
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Descripción</th>
											<th class="text-center">Material</th>
											<th class="text-center">Precio</th>
											<th class="text-center">Stock</th>
											<th class="text-center">Color</th>
											<th class="text-center">Tipo</th>
											<th class="text-center">imagen</th>
											<th class="text-center">imagen 2</th>
											<th class="text-center">imagen 3</th>
											<th class="text-center">Descuento</th>
											<th class="text-center">Metodo</th>
											<th class="text-center">Costo Envio</th>
											<th class="text-center">Tiempo Entrega</th>
											<th class="text-center">Devolucion</th>
											<th class="text-center">Garantia</th>
											<th class="text-center">Certificacion</th>

											<th class="text-center">Nombre Categoria </th>
                                            <th class="text-center">Descripcion</th>

											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
										@foreach($productos as $producto)
											<tr>
												<td>{{ $producto->id_producto }}</td>
												<td>{{ $producto->nombreP }}</td>
												<td>{{ $producto->descripcionP }}</td>
												<td>{{ $producto->materialP }}</td>
												<td>{{ $producto->precioP }}</td>
												<td>{{ $producto->stock }}</td>
												<td>{{ $producto->colorP }}</td>
												<td>{{ $producto->tipoP }}</td>

												<td><img src="{{ url( $producto->imgP) }}" style="max-width: 100px; max-height: 100px;"></td>
												<td><img src="{{ url( $producto->imgP2) }}" style="max-width: 100px; max-height: 100px;"></td>
												<td><img src="{{ url( $producto->imgP3) }}" style="max-width: 100px; max-height: 100px;"></td>

												<td>{{ $producto->descuentoP }}</td>
												<td>{{ $producto->metodoP }}</td>
												<td>{{ $producto->costoEnvio }}</td>
												<td>{{ $producto->tiempoEntrega }}</td>
												<td>{{ $producto->devolucionP }}</td>
												<td>{{ $producto->garantiaP }}</td>
												<td>{{ $producto->certificacionP }}</td>

												<td>{{ $producto->nombreCa}} </td>
                                                <td>{{ $producto->descripcionCa}} </td>

												<td><a href="{{ route('administracion.productos.editproducto', $producto->id_producto) }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                                <td>
													<form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST">
														@csrf
														@method('DELETE')
														<button type="submit" class="btn btn-danger btn-raised btn-xs" onclick="return confirm('¿Estás seguro de eliminar este producto?')"><i class="zmdi zmdi-delete"></i></button>
													</form>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>  <!-- Fin del contenedor para el desplazamiento -->
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="{{asset('js/Administrador/js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/sweetalert2.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/material.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/ripples.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/main.js')}}"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>
