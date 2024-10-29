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
					<img src="./assets/img/avatar.jpg" alt="UserIcon">
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
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Crear Usuario <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Clientes</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Artesano</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Repartidor</a>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Settings <small>School Data</small></h1>
			</div>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li><a href="#listYear" data-toggle="tab"><i class="zmdi zmdi-calendar-note"></i> Lista  Artesanos</a></li>
                        <li><a href="#listCliente" data-toggle="tab"><i class="zmdi zmdi-calendar-note"></i> Lista  Clientes</a></li>
                        <li><a href="#listRepartidor" data-toggle="tab"><i class="zmdi zmdi-calendar-check"></i> Lista  Repartidor</a></li>
					  	<li><a href="#listprod" data-toggle="tab"><i class="zmdi zmdi-timer"></i> Lista Producto</a></li>
					  	<li><a href="#listCliente" data-toggle="tab"><i class="zmdi zmdi-time-restore"></i> Lista  Pedidos </a></li>
					</ul>
					<div class="tab-content">
                        	
					  	<div class="tab-pane fade" id="listYear">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
                                        <th class="text-center">#</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellido Paterno</th>
											<th class="text-center">Apellido Materno</th>
											<th class="text-center">Sexo</th>
											<th class="text-center">Teléfono</th>
											<th class="text-center">Dirección</th>
											<th class="text-center">Correo</th>
											<th class="text-center">Especialidad</th>
											<th class="text-center">Descripción</th>
                                            <th class="text-center">Nombre de Comunidad</th>
                                            <th class="text-center">Ciudad de Comunidad</th>
											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
                                    @if($artesanos->isEmpty())
                                            <tr>
                                                <td colspan="11">No hay resultados</td>
                                            </tr>
                                    @else
                                        @foreach($artesanos as $artesano)
                                            <tr>
                                                <td>{{ $artesano->user ? $artesano->user->id_usuario : 'Sin id' }}</td>
                                                <td>{{ $artesano->user ? $artesano->user->name : 'Sin nombre' }}</td>
                                                <td>{{ $artesano->user ? $artesano->user->paterno : 'Sin apellido' }}</td>
                                                <td>{{ $artesano->user ? $artesano->user->materno : 'Sin apellido' }}</td>
                                                <td>{{ $artesano->user ? $artesano->user->sexo : 'Sin sexo' }}</td>
                                                <td>{{ $artesano->user ? $artesano->user->telefono : 'Sin teléfono' }}</td>
                                                <td>{{ $artesano->user ? $artesano->user->direccion : 'Sin dirección' }}</td>
                                                <td>{{ $artesano->user ? $artesano->user->email : 'Sin correo' }}</td>
                                                <td>{{ $artesano->especialidadA }}</td>
                                                <td>{{ $artesano->descripcionA }}</td>
                                                <td>{{ $artesano->comunidad->nombreCo }}</td>
                                                <td>{{ $artesano->comunidad->ciudad }}</td>
                                                <td><a href="{{ route('administracion.artesanos.editartesano', $artesano->id_artesano) }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                                <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                            </tr>
                                        @endforeach
                                    @endif	
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					  	
					  	<div class="tab-pane fade" id="listCliente">
							<div class="table-responsive">
                            <table class="table table-hover text-center">
									<thead>
										<tr>
                                        <th class="text-center">#</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellido Paterno</th>
											<th class="text-center">Apellido Materno</th>
											<th class="text-center">Sexo</th>
											<th class="text-center">Teléfono</th>
											<th class="text-center">Dirección</th>
											<th class="text-center">Correo</th>
											<th class="text-center">Preferencias</th>
		
											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
                                    @if($clientes->isEmpty())
                                            <tr>
                                                <td colspan="11">No hay resultados</td>
                                            </tr>
                                    @else
                                        @foreach($clientes as $cliente)
                                            <tr>
                                                <td>{{ $cliente->user ? $cliente->user->id_usuario : 'Sin id' }}</td>
                                                <td>{{ $cliente->user ? $cliente->user->name : 'Sin nombre' }}</td>
                                                <td>{{ $cliente->user ? $cliente->user->paterno : 'Sin apellido' }}</td>
                                                <td>{{ $cliente->user ? $cliente->user->materno : 'Sin apellido' }}</td>
                                                <td>{{ $cliente->user ? $cliente->user->sexo : 'Sin sexo' }}</td>
                                                <td>{{ $cliente->user ? $cliente->user->telefono : 'Sin teléfono' }}</td>
                                                <td>{{ $cliente->user ? $cliente->user->direccion : 'Sin dirección' }}</td>
                                                <td>{{ $cliente->user ? $cliente->user->email : 'Sin correo' }}</td>
                                                <td>{{ $cliente->preferencia }}</td>
                                              
                

                                                <td><a href="#" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                                <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                            </tr>
                                        @endforeach
                                    @endif	
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>

                        <div class="tab-pane fade" id="listRepartidor">
							<div class="table-responsive">
                            <table class="table table-hover text-center">
									<thead>
										<tr>
                                        <th class="text-center">#</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellido Paterno</th>
											<th class="text-center">Apellido Materno</th>
											<th class="text-center">Sexo</th>
											<th class="text-center">Teléfono</th>
											<th class="text-center">Dirección</th>
											<th class="text-center">Correo</th>
                                            <th class="text-center">Disponibilidad</th>
                                            <th class="text-center">Calificacion</th>
											<th class="text-center">Modelo vehiculo</th>
                                            <th class="text-center">Placa vehiculo</th>
                                            <th class="text-center">Color vehiculo</th>
                                            <th class="text-center">Tipo vehiculo</th>
		
											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
                                    @if($repartidores->isEmpty())
                                            <tr>
                                                <td colspan="11">No hay resultados</td>
                                            </tr>
                                    @else
                                        @foreach($repartidores as $repartidor)
                                            <tr>
                                                <td>{{ $repartidor->user ? $repartidor->user->id_usuario : 'Sin id' }}</td>
                                                <td>{{ $repartidor->user ? $repartidor->user->name : 'Sin nombre' }}</td>
                                                <td>{{ $repartidor->user ? $repartidor->user->paterno : 'Sin apellido' }}</td>
                                                <td>{{ $repartidor->user ? $repartidor->user->materno : 'Sin apellido' }}</td>
                                                <td>{{ $repartidor->user ? $repartidor->user->sexo : 'Sin sexo' }}</td>
                                                <td>{{ $repartidor->user ? $repartidor->user->telefono : 'Sin teléfono' }}</td>
                                                <td>{{ $repartidor->user ? $repartidor->user->direccion : 'Sin dirección' }}</td>
                                                <td>{{ $repartidor->user ? $repartidor->user->email : 'Sin correo' }}</td>
                                                <td>{{ $repartidor->disponibilidadR }}</td>
                                                <td>{{ $repartidor->calificacionR }}</td>
                                                <td>{{ $repartidor->vehiculo->modeloV }}</td>
                                                <td>{{ $repartidor->vehiculo->placaV }}</td>
                                                <td>{{ $repartidor->vehiculo->colorV }}</td>
                                                <td>{{ $repartidor->vehiculo->tipoV }}</td>

                                                <td><a href="#" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                                <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                            </tr>
                                        @endforeach
                                    @endif	
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>

                        <div class="tab-pane fade" id="listprod">
						    <div class="table-responsive">
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
                                            <th class="text-center">imagen </th>
                                            <th class="text-center">imagen 2</th>
                                            <th class="text-center">imagen 3</th>

                                            <th class="text-center">Descuento </th>
                                            <th class="text-center">Metodo de Pago</th>
                                            <th class="text-center">Costo Envio </th>
                                            <th class="text-center">Timepo de Entrega </th>
                                            <th class="text-center">Devolucion  </th>
                                            <th class="text-center">Garantia </th>
                                            <th class="text-center">Certificacio</th>
											<th class="text-center">Nombre Categoria </th>
                                            <th class="text-center">Descripcion</th>
                                            

											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
                                    @if($productos->isEmpty())
                                        <tr>
                                            <td colspan="15">No hay resultados</td>
                                        </tr>
                                    @else 
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
												<td>{{ $producto->descuentoP}}
                                                <td>{{ $producto->metodoP}}</td>
                                                <td>{{ $producto->costoEnvio}}</td>
                                                <td>{{ $producto->tiempoEntrega}}</td>
                                                <td>{{ $producto->devolucionP}} </td>
                                                <td>{{ $producto->garantiaP}} </td>
                                                <td>{{ $producto->certificacionP}} </td>
                                                
                                                <td>{{ $producto->categoria->nombreCa}} </td>
                                                <td>{{ $producto->categoria->descripcionCa}} </td>
                                                
                                                <td><a href="#" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                                <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                            </tr>
                                        @endforeach
                                    @endif
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>


                         
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