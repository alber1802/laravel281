<!DOCTYPE html>
<html lang="es">
<head>
	<title>Nuevo Artesano</title>
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
							<a href="school.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> School Data</a>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Nuevo Artesano <small>COMMCRAFT</small></h1>
			</div>
			<p class="lead">Agregar un nuevo artesano permite registrar su información y habilidades en el sistema, promoviendo su trabajo y facilitando la conexión con los clientes.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
										<form name="registro" action="{{ route('validarRegistroA') }}" method="POST"  enctype="multipart/form-data" >
											<div class="form-group label-floating">
											  <label class="control-label">Nombre Pila</label>
											  <input class="form-control" id="nombre" name="nombre" required class="input" />
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input class="form-control" id="name" name="name" required class="input" />
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Apellido Paterno</label>
											  <input class="form-control" id="paterno" name="paterno" required class="input" />
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Apellido Materno</label>
											  <input class="form-control" id="materno" name="materno" required class="input" />
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Correo Electrónico</label>
											  <input class="form-control" id="email" name="email" type="email" required class="input" />
											</div>

											<div class="form-group label-floating">
											  <label class="control-label">Dirección</label>
											  <input class="form-control" id="direccion" name="direccion" required class="input" />
											</div>
                                            <div class="form-group label-floating">
                                                <label>Sexo</label>
                                                <select class="form-control" id="sexo" name="sexo" required>
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Femenino</option>
                                                </select>
                                            </div>
											
											<div class="form-group label-floating">
												<select id="ciudad" name="ciudad" required class="input" onchange="filterCommunities()" require>
													<option value="" disabled selected>Seleccione tu Ciudad</option>
													<option value="La Paz">La Paz</option>
													<option value="Cochabamba">Cochabamba</option>
													<option value="Santa Cruz">Santa Cruz</option>
													<option value="Beni">Beni</option>
													<option value="Pando">Pando</option>
													<option value="Tarija">Tarija</option>
													<option value="Chuquisaca">Chuquisaca</option>
													<option value="Oruro">Oruro</option>
													<option value="Potosí">Potosí</option>
												</select>
												
												<select id="nombreCo" name="nombreCo" required class="input" require>
													<option value="" disabled selected>Selecciona Tu comunidad</option>
												</select>
											</div>
											
											<div class="form-group label-floating">
											  <label class="control-label">Telefono </label>
											  <input class="form-control" id="telefono" name="telefono" type="tel" required class="input" />
                
											</div>
                                            <div class="form-group label-floating">
											  <label class="control-label">Contraseña </label>
											  <input class="form-control" id="password" name="password" type="password" required class="input" onkeyup="validatePassword()" />
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Especialidad</label>
											  <input class="form-control" id="especialidadA" name="especialidadA" required class="input" />
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Descripcion</label>
											  <input class="form-control" id="descripcionA" name="descripcionA"  required class="input" />
											</div>
											<div class="form-group">
										      <label class="control-label">Foto</label>
										      <div>
										        <input type="text" readonly="" class="form-control" placeholder="Browse..." id="url" name="url" required>
												<input  type="file" id="file" name="file" accept="image/*" class="input">
										      </div>
										    </div>
										    <p class="text-center">
										    	<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar Artesano</button>
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
	<script src="{{asset('js/LoginRegistro/Artesano.js')}}"></script>
    <script src="{{asset('js/Validaciones/VerificacionPassword.js')}}" ></script>
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
	<script>
        function filterCommunities() {
            var ciudadSelect = document.getElementById('ciudad');
            var comunidadSelect = document.getElementById('nombreCo');
            var selectedCity = ciudadSelect.value;

            // Reiniciar el select de comunidades
            comunidadSelect.innerHTML = '<option value="" disabled selected>Selecciona Tu comunidad</option>';

            // Obtener todas las opciones de comunidad
            var comunidades = [

                // LA PAZ
                { name: "Kallawaya", ciudad: "La Paz" },
                { name: "Los Yungas", ciudad: "La Paz" },
                { name: "Uru Chipaya", ciudad: "La Paz" },
                { name: "Tiwanaku", ciudad: "La Paz" },
                { name: "Laja", ciudad: "La Paz" },
                { name: "Sorata", ciudad: "La Paz" },
                { name: "Achacachi", ciudad: "La Paz" },
                { name: "Palca", ciudad: "La Paz" },

                // COCHABAMBA
                { name: "Quechua", ciudad: "Cochabamba" },
                { name: "Ayopaya", ciudad: "Cochabamba" },
                { name: "Chapare", ciudad: "Cochabamba" },
                { name: "Valle Alto", ciudad: "Cochabamba" },
                { name: "Mizque", ciudad: "Cochabamba" },
                { name: "Sacaba", ciudad: "Cochabamba" },
                { name: "Independencia", ciudad: "Cochabamba" },
                { name: "Punata", ciudad: "Cochabamba" },
                { name: "Tiraque", ciudad: "Cochabamba" },
                { name: "Anzaldo", ciudad: "Cochabamba" },

                // SANTA CRUZ
                { name: "Guaraní", ciudad: "Santa Cruz" },
                { name: "Chiquitana", ciudad: "Santa Cruz" },
                { name: "Ayoreo", ciudad: "Santa Cruz" },
                { name: "Montereña", ciudad: "Santa Cruz" },
                { name: "Vallegrande", ciudad: "Santa Cruz" },
                { name: "San Ignacio", ciudad: "Santa Cruz" },
                { name: "Samaipata", ciudad: "Santa Cruz" },
                { name: "Paurito", ciudad: "Santa Cruz" },
                { name: "Okinawa", ciudad: "Santa Cruz" },
                { name: "Buena Vista", ciudad: "Santa Cruz" },

                // BENI
                { name: "Moxeña", ciudad: "Beni" },
                { name: "Movima", ciudad: "Beni" },
                { name: "Chimán", ciudad: "Beni" },
                { name: "Itonama", ciudad: "Beni" },
                { name: "Sirionó", ciudad: "Beni" },
                { name: "Canichana", ciudad: "Beni" },
                { name: "Yuracaré", ciudad: "Beni" },
                { name: "Baure", ciudad: "Beni" },
                { name: "Trinitaria", ciudad: "Beni" },
                { name: "Cavineña", ciudad: "Beni" },

                // PANDO
                { name: "Pacahuara", ciudad: "Pando" },
                { name: "Chácobo", ciudad: "Pando" },
                { name: "Esse Ejja", ciudad: "Pando" },
                { name: "Tacana", ciudad: "Pando" },
                { name: "Bella Flor", ciudad: "Pando" },
                { name: "Puerto Rico", ciudad: "Pando" },
                { name: "Filadelfia", ciudad: "Pando" },
                { name: "San Pedro", ciudad: "Pando" },
                { name: "Sena", ciudad: "Pando" },
                { name: "Nueva Esperanza", ciudad: "Pando" },

                // TARIJA
                { name: "Tomatitas", ciudad: "Tarija" },
                { name: "San Lorenzo", ciudad: "Tarija" },
                { name: "El Puente", ciudad: "Tarija" },
                { name: "Yunchará", ciudad: "Tarija" },
                { name: "Iscayachi", ciudad: "Tarija" },
                { name: "Padcaya", ciudad: "Tarija" },
                { name: "Chiquiacá", ciudad: "Tarija" },
                { name: "Entre Ríos", ciudad: "Tarija" },
                { name: "Caraparí", ciudad: "Tarija" },

                // CHUQUISACA
                { name: "Tarabuco", ciudad: "Chuquisaca" },
                { name: "Yamparáez", ciudad: "Chuquisaca" },
                { name: "Zudáñez", ciudad: "Chuquisaca" },
                { name: "Mojocoya", ciudad: "Chuquisaca" },
                { name: "Icla", ciudad: "Chuquisaca" },
                { name: "Presto", ciudad: "Chuquisaca" },
                { name: "Villa Serrano", ciudad: "Chuquisaca" },
                { name: "Padilla", ciudad: "Chuquisaca" },
                { name: "Muyupampa", ciudad: "Chuquisaca" },
                { name: "Monteagudo", ciudad: "Chuquisaca" },

                // ORURO
                { name: "Challapata", ciudad: "Oruro" },
                { name: "Huanuni", ciudad: "Oruro" },
                { name: "Poopó", ciudad: "Oruro" },
                { name: "Caracollo", ciudad: "Oruro" },
                { name: "Machacamarca", ciudad: "Oruro" },
                { name: "Orinoca", ciudad: "Oruro" },
                { name: "Sabaya", ciudad: "Oruro" },
                { name: "Huari", ciudad: "Oruro" },
                { name: "Curahuara de Carangas", ciudad: "Oruro" },
                { name: "Salinas de Garci Mendoza", ciudad: "Oruro" },

                // POTOSI
                { name: "Uyuni", ciudad: "Potosí" },
                { name: "Betanzos", ciudad: "Potosí" },
                { name: "Tupiza", ciudad: "Potosí" },
                { name: "Cotagaita", ciudad: "Potosí" },
                { name: "Villazón", ciudad: "Potosí" },
                { name: "San Pedro de Quemes", ciudad: "Potosí" },
                { name: "Atocha", ciudad: "Potosí" },
                { name: "San Antonio", ciudad: "Potosí" },
                { name: "Sacaca", ciudad: "Potosí" }

                // Agrega más comunidades aquí
            ];

            // Filtrar comunidades por ciudad seleccionada
            comunidades.forEach(function(comunidad) {
                if (comunidad.ciudad === selectedCity) {
                    var option = document.createElement('option');
                    option.value = comunidad.name;
                    option.textContent = comunidad.name;
                    comunidadSelect.appendChild(option);
                }
            });
        }
    </script>
</body>
</html>