<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>editar Productos</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="{{ asset('css/productosv2/css/normalize.css') }}">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="{{ asset('css/productosv2/css/bootstrap.min.css') }}">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="{{ asset('css/productosv2/css/bootstrap-material-design.min.css')}}">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="{{ asset('css/productosv2/css/all.css')}}">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="{{ asset('css/productosv2/css/sweetalert2.min.css')}}">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="{{asset('js/productosv2/js/sweetalert2.min.js') }}" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="{{ asset('css/productosv2/css/jquery.mCustomScrollbar.css')}}">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="{{ asset('css/productosv2/css/style.css')}}">

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
					<i class="fas fa-plus fa-fw"></i> &nbsp; MODIFICAR PRODUCTO
				</h3>
				<p class="text-justify">
                Bienvenido a la sección de ingreso edicion del productos, donde podrás modificar artículos a nuestro catálogo. Esta funcionalidad está diseñada para facilitar la gestión de productos, permitiendo a los usuarios ingresar información detallada sobre cada artículo, como su nombre, descripción, precio, stock disponible y categoría. 
				</p>
			</div>
	<!-- Content 	
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
                   
					<li>
						<a href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTO</a>
					</li>
                    
				</ul>
					
			</div>
			-->	
		

			
			<div class="container-fluid">
				<form name="producto-modificar" class="form-neon" action="{{ route('producto-modificar', $producto->id_producto) }}" method="POST" enctype="multipart/form-data">
                @csrf
					<fieldset>
						<legend><i class="fas fa-shopping-cart"></i>
                        &nbsp; INFORMACION DEL PRODUCTO</legend>
						<div class="container-fluid">
							<div class="row">
							
								<div class="col-12 col-md-8">
									<div class="form-group">
										<label for="nombreP" class="bmd-label-floating">Nombre del Producto</label>
										<input type="text" class="form-control"  value="{{ $producto->nombreP }}"name="nombreP" id="nombreP" >
									</div>
								</div>
							
								
								<div class="col-12 col-md-4">
                                    <div class="form-group">
                                   
										<select style="text-align-last: center;" class="form-control" id="id_categoria" name="id_categoria">
       									@foreach($categorias as $categoria)
										   <option value="{{ $categoria->id_categoria }}" 
            								{{ $producto->id_categoria == $categoria->id_categoria ? 'selected' : '' }}>
            										{{ $categoria->nombreCa }}
       										 </option>
        								@endforeach
   									
										</select>
                                    </div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="descripcionP" class="bmd-label-floating">Descripcion del Producto</label>	
										<textarea class="form-control" name="descripcionP" id="descripcionP" rows="4" value="{{ $producto->descripcionP }}" > {{ $producto->descripcionP }}</textarea>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<fieldset>
						<legend><i class="fas fa-file-image"></i> &nbsp; IMAGENES DEL PRODUCTO </legend>
						<div class="container-fluid">
							<div class="row">
							<div class="col-12 col-md-6">
							<div id="carousel-{{ $producto->id_producto }}" class="carousel slide" data-ride="carousel">
                    			<div class="carousel-inner">
                        		@if($producto->imgP)
                        			<div class="carousel-item active">
                            			<img src="{{ Storage::url($producto->imgP) }}" class="d-block w-100" alt="Imagen del producto {{ $producto->nombreP }}" style="max-height: 250px;">
                        			</div>
                        		@endif
                        		@if($producto->imgP2)
                        		<div class="carousel-item">
                            		<img src="{{ Storage::url($producto->imgP2) }}" class="d-block w-100" alt="Imagen del producto {{ $producto->nombreP }}" style="max-height: 250px;">
                        		</div>
                        		@endif
                        		@if($producto->imgP3)
                        		<div class="carousel-item">
                            		<img src="{{ Storage::url($producto->imgP3) }}" class="d-block w-100" alt="Imagen del producto {{ $producto->nombreP }}" style="max-height: 250px;">
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
						</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="imagen">Imagen Frontal del producto <br><p>La vista frontal se proyecta hacia el plano frontal. </p></label>
							
                                        <input type='file' value="Storage::url($producto->imgP)" id="imgP" name="imgP" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
										<label for="imagen">Imagen Superior del producto<br><p> La vista superior se proyecta hacia el plano horizontal.  </p></label>
                                        <input type='file' id="imgP2" name="imgP2" value="{{ Storage::url($producto->imgP2) }}"  accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
										<label for="imagen">Imagen Lateral del producto<br><p>La vista lateral se proyecta hacia el plano de perfil. </p></label>
                                        <input type='file' value="{{ Storage::url($producto->imgP3) }}" id="imgP3" name="imgP3" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
									</div>
								</div>
								
							</div>
						</div>
					</fieldset>
					<br><br><br>
                    <fieldset>
						<legend><i class="fas fa-briefcase"></i> &nbsp; ESPECIFICACIONES TECNICAS DEL PRODUCTO</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="materialP" class="bmd-label-floating">Materiales del Producto</label>
										<input type="text" value="{{ $producto->materialP }}"  class="form-control" name="materialP" id="materialP" >
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="tipoP" class="bmd-label-floating">Dimensiones del Producto, ejemplo 20x40 cm , 10 cm</label>
										<input type="text" value="{{ $producto->tipoP }}"  class="form-control" name="tipoP" id="tipoP" >
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="colorP" class="bmd-label-floating">Colores Disponibles del Producto</label>
										<input type="text" value="{{ $producto->colorP }}"  class="form-control" name="colorP" id="colorP" >
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
                    <fieldset>
						<legend><i class="fas fa-money-bill"></i> &nbsp; PRECIO Y DISPONIBILIDAD DEL PRODUCTO</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
    									<label for="precioP" class="bmd-label-floating">Precio del Producto</label>
    									<div class="input-group">
        									
        									<input type="number" value="{{ $producto->precioP }}"  class="form-control" name="precioP" id="precioP" maxlength="35">
											<div class="input-group-prepend">
            									<span class="input-group-text"><i class="fas fa-dollar-sign"></i></span> 
        									</div>
    									</div>
									</div>

								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="descuentoP" class="bmd-label-floating">Descuento del Producto</label>
										
										<div class="input-group">
											<input type="number" class="form-control" name="descuentoP" value="{{ $producto->descuentoP }}"  id="descuentoP" >
											<div class="input-group-prepend">
            									<span class="input-group-text"> %</span> 
        									</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="stock" class="bmd-label-floating">Disponibilidad del Producto (Stock)</label>
										<input type="number" value="{{ $producto->stock }}"  class="form-control" name="stock" id="stock" >
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
                   
						<legend><i class="fas fa-truck"></i>&nbsp; OPCIONES DE ENVIO DEL PRODUCTO</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_usuario" class="bmd-label-floating">Metodos de Envio</label>
										<select class="form-control" id="metodoP" name="metodoP">
                                            <option id="1" name="1" value="{{ $producto->metodoP }}">{{ $producto->metodoP }}</option>
                                            <option id="2" name="2" value="Estandar">Estandar</option>
                                            <option id="3" name="3" value="Expreso">Expreso</option>
                                            <option id="4" name="4" value="Gratuito">Gratuito</option>
                                            <option id="5" name="5" value="Programado">Programado</option>
                                        </select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="costoEnvio" class="bmd-label-floating">Costo de Envio</label>
										<div class="input-group">
										<input type="number" value="{{ $producto->costoEnvio }}"  class="form-control" name="costoEnvio" id="costoEnvio" maxlength="70">
										<div class="input-group-prepend">
            									<span class="input-group-text"><i class="fas fa-dollar-sign"></i></span> 
        								</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="tiempoEntrega" class="bmd-label-floating">Tiempo de Entrega</label>
										<div class="input-group">
										<input type="number" class="form-control" name="tiempoEntrega" value="{{ $producto->tiempoEntrega }}"  id="tiempoEntrega" >
										<div class="input-group-prepend">
            									<span class="input-group-text"><i class="fas fa-clock"></i></span> 
        								</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
                 <fieldset>
						<legend><i class="fas fa-book"></i>&nbsp; POLITICAS DE DEVOLCION DEL PRODUCTO</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
    								<div class="form-group">
        								<label for="devolucionP" class="bmd-label-floating">Políticas de Devolución </label>
										<input type="text" value="{{ $producto->devolucionP }}"   class="form-control" name="devolucionP" id="devolucionP" >
    								</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="garantiaP"  class="bmd-label-floating">Garantia</label>
										<input type="text" value="{{ $producto->garantiaP }}"  class="form-control" name="garantiaP" id="garantiaP" >
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
                    <fieldset>
						<legend><i class="fas fa-file-shield"></i> &nbsp; CERTIFICACIONES Y AUTENTICIDAD DEL PRODUCTO</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
    								<div class="form-group">
        								<label for="certificacionP" class="bmd-label-floating">Certificaciones del Producto</label>
										<input type="text" value="{{ $producto->certificacionP }}"  class="form-control" name="certificacionP" id="certificacionP" >
    								</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="autP" class="bmd-label-floating">Autenticidad del Producto</label>
										<div class="input-group">
										<input type="number" value="{{ $producto->autP }}"  class="form-control" name="autP" id="autP" m>
										</div>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
                   
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit"  class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
					</p>
				</form>
			</div>
			
        <!-- MODAL CATEGORIA --> <form name="registroC" class="form-neon" action="{{ route('validar-registerC') }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
        <div class="modal fade" id="ModalCliente" tabindex="-1" role="dialog" aria-labelledby="ModalCliente" aria-hidden="true">
           
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalCliente">Agregar categoria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="nombreCa" class="bmd-label-floating">Nombre</label>
                                    <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ#() ]{1,30}" class="form-control" name="nombreCa" id="nombreCa" maxlength="30">
                                </div>
                                <div class="form-group">
                                    <label for="descripcionCa" class="bmd-label-floating">Descripcion</label>
                                    <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ#() ]{1,30}" class="form-control" name="descripcionCa" id="descripcionCa" maxlength="30">
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
                    </div>
                </div>
            </div>
		</section>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->

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


