<!DOCTYPE html>
<html lang="es">
<head>
	<title>Editar Repartidor</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/Administrador/main.css')}}">
	<link rel="shortcut icon" href="{{asset('imagen/logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('imagen/logo.png')}}">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				company <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="{{ asset('imagen/logo.png') }}" alt="UserIcon">
					<figcaption class="text-center text-titles">COMMCRAFT </figcaption>
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
					<a href="{{ route('dashboard') }}">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administracion  <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
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
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Ver Datos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="{{route('Administrador.listar')}}"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Datos de Sistema </a>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Editar repartidor <small>COMMCRAFT</small></h1>
			</div>
			<p class="lead">Editar al usuario repartidor permite actualizar su información y detalles de contacto, optimizando la coordinación y eficiencia en las entregas.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Editar</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
                                        <form action="{{ route('administracion.repartidos.update', $repartido->id_repartidor) }}" method="POST">
                                            @csrf
                                            @method('PUT')

									    	<div class="form-group label-floating">
											  <label for="name" class="control-label">Nombre</label>
                                              <input type="text" class="form-control" id="name" name="name" value="{{ $repartido->user->name }}" required>
											</div>
											<div class="form-group label-floating">
											  <label for="paterno" class="control-label">Apellido Paterno </label>
											  <input type="text" class="form-control" id="paterno" name="paterno" value="{{ $repartido->user->paterno }}" required>
											</div>
                                            <div class="form-group label-floating">
											  <label for="paterno" class="control-label">Apellido Materno </label>
                                              <input type="text" class="form-control" id="materno" name="materno" value="{{ $repartido->user->materno }}" required>
											</div>
                                            <div class="form-group label-floating">
											  <label for="nombre" class="control-label">Alias </label>
                                              <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $repartido->user->nombre }}" required>
											</div>
                                            <div class="form-group label-floating">
                                                <label for="sexo">Sexo</label>
                                                <select class="form-control" id="sexo" name="sexo" required>
                                                    <option value="M" {{ $repartido->user->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                                                    <option value="F" {{ $repartido->user->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
                                                </select>
                                            </div>
                                            <div class="form-group label-floating">
											  <label for="telefono" class="control-label">Telefono </label>
                                              <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $repartido->user->telefono }}" required>
											</div>
                                            <div class="form-group label-floating">
											  <label for="direccion" class="control-label">Direccion </label>
                                              <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $repartido->user->direccion }}" required>
											</div>
											<div class="form-group label-floating">
											  <label for="email" class="control-label">Correo Electrónico</label>
                                              <input type="email" class="form-control" id="email" name="email" value="{{ $repartido->user->email }}" required>
											</div>
											<div class="form-group label-floating">
											  <label for="disponibilidadR" class="control-label">Disponibilidad</label>
                                                <input type="text" class="form-control" id="disponibilidadR" name="disponibilidadR" value="{{ $repartido->disponibilidadR }}" required>
                                            </div>
											<div class="form-group">
										      <label class="control-label">Foto</label>
										      <div>
										        <input type="text" readonly="" class="form-control" placeholder="Browse...">
										        <input type="file" >
										      </div>
										    </div>
											<h1>DATOS VEHICULO</h1>
											<!-- DATOS MOTO-->
											<div class="form-group label-floating">
											  <label for="modeloV" class="control-label">Modelo</label>
                                                <input type="text" class="form-control" id="modeloV" name="modeloV" value="{{ $repartido->vehiculo->modeloV }}" required>
                                            </div>
											<div class="form-group label-floating">
											  <label for="placaV" class="control-label">Placa</label>
                                                <input type="text" class="form-control" id="placaV" name="placaV" value="{{ $repartido->vehiculo->placaV }}" required>
                                            </div>
											<div class="form-group label-floating">
											  <label for="colorV" class="control-label">Color</label>
                                                <input type="text" class="form-control" id="colorV" name="colorV" value="{{ $repartido->vehiculo->colorV }}" required>
                                            </div>
											<div class="form-group label-floating">
											  <label for="tipoV" class="control-label">Tipo</label>
                                                <input type="text" class="form-control" id="tipoV" name="tipoV" value="{{ $repartido->vehiculo->tipoV }}" required>
                                            </div>

										    <p class="text-center">
										    	<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Actualizar repartido</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Name</th>
											<th class="text-center">Last Name</th>
											<th class="text-center">Address</th>
											<th class="text-center">Email</th>
											<th class="text-center">Phone</th>
											<th class="text-center">Update</th>
											<th class="text-center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Carlos</td>
											<td>Alfaro</td>
											<td>El Salvador</td>
											<td>carlos@gmail.com</td>
											<td>+50312345678</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Alicia</td>
											<td>Melendez</td>
											<td>El Salvador</td>
											<td>alicia@gmail.com</td>
											<td>+50312345678</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>Sarai</td>
											<td>Lopez</td>
											<td>El Salvador</td>
											<td>sarai@gmail.com</td>
											<td>+50312345678</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>4</td>
											<td>Alba</td>
											<td>Bonilla</td>
											<td>El Salvador</td>
											<td>alba@gmail.com</td>
											<td>+50312345678</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
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