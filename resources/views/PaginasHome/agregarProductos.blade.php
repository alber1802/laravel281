<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Agregar Productos</title>

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
					<img src="imagen/assets/Avatar.png" class="img-fluid" alt="Avatar">
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
					<i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO PRODUCTO
				</h3>
				<p class="text-justify">
                Bienvenido a la sección de ingreso de productos, donde podrás añadir nuevos artículos a nuestro catálogo. Esta funcionalidad está diseñada para facilitar la gestión de productos, permitiendo a los usuarios ingresar información detallada sobre cada artículo, como su nombre, descripción, precio, stock disponible y categoría. 
				</p>
			</div>
			
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCliente"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA CATEGORIA </button>
					</li>
					<li>
						<a href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTO</a>
					</li>
                    
				</ul>
					
			</div>
>>>>>>> Stashed changes

			<!-- Content -->
			<div class="container-fluid">
				<form name="registro" class="form-neon" action="{{ route('registroNuevoProducto', ['id_usuario' => $id_usuario])}}" method="POST" enctype="multipart/form-data">
                @csrf
					<fieldset>
						<legend><i class="fas fa-shopping-cart"></i>
                        &nbsp; Información basica del Producto</legend>
						<div class="container-fluid">
							<div class="row">
							<!--<p>El ID del usuario es: {{ $id_usuario }}</p>-->
								<div class="col-12 col-md-8">
									<div class="form-group">
										<label for="nombreP" class="bmd-label-floating">Nombre</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="nombreP" id="nombreP" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-4">
                                    <div class="form-group">
										<select style="text-align-last: center;" class="form-control" id="id_categoria" name="id_categoria">
    										<option value="0">Seleccione una categoría</option>

   												 @if(!empty($categorias) && count($categorias) > 0)
       												 @foreach($categorias as $categoria)
            											<option value="{{ $categoria->id_categoria }}">{{ $categoria->nombreCa }}</option>
        											@endforeach
    											@else
        											<option value="1">No hay categorías disponibles</option>
    											@endif
										</select>
                                    </div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="descripcionP" class="bmd-label-floating">Descripcion</label>
										<textarea class="form-control" name="descripcionP" id="descripcionP" rows="5" maxlength="500" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,500}"></textarea>
									</div>
								</div>
								
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<fieldset>
						<legend><i class="fas fa-file-image"></i> &nbsp; Imagenes del Producto</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="imagen">Imagen Frontal del producto <br><p>La vista frontal se proyecta hacia el plano frontal. </p></label>
>>>>>>> Stashed changes
                                        <input type='file' id="imgP" name="imgP" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="imagen">Imagen Superior del producto<br><p> La vista superior se proyecta hacia el plano horizontal.  </p></label>
                                        <input type='file' id="imgP2" name="imgP2" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="imagen">Imagen Lateral del producto<br><p>La vista lateral se proyecta hacia el plano de perfil. </p></label>
                                        <input type='file' id="imgP3" name="imgP3" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
									</div>
								</div>
								
							</div>
						</div>
					</fieldset>
					<br><br><br>
                    <fieldset>
						<legend><i class="fas fa-briefcase"></i> &nbsp; Especificaciones tecnicas del Producto</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="materialP" class="bmd-label-floating">Materiales</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="materialP" id="materialP" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="tipoP" class="bmd-label-floating">Dimensiones</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="tipoP" id="tipoP" maxlength="70">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="colorP" class="bmd-label-floating">Colores Disponibles</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="colorP" id="colorP" maxlength="200">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
                    <fieldset>
						<legend><i class="fas fa-money-bill"></i> &nbsp; Precio y Disponibilidad del Producto</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
    									<label for="precioP" class="bmd-label-floating">Precio</label>
    									<div class="input-group">
        									
        									<input type="number" class="form-control" name="precioP" id="precioP" maxlength="35">
											<div class="input-group-prepend">
            									<span class="input-group-text"><i class="fas fa-dollar-sign"></i></span> 
        									</div>
    									</div>
									</div>

								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="descuentoP" class="bmd-label-floating">Descuento</label>
										<div class="input-group">
											<input type="number" class="form-control" name="descuentoP" id="descuentoP" maxlength="70">
											<div class="input-group-prepend">
            									<span class="input-group-text"><i class="fas fa-dollar-sign"></i></span> 
        									</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="stock" class="bmd-label-floating">Disponibilidad</label>
										<input type="number" class="form-control" name="stock" id="stock" maxlength="200">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
                   
						<legend><i class="fas fa-truck"></i>&nbsp; Opciones de envio del Producto</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_usuario" class="bmd-label-floating">Metodos de Envio</label>
										<select class="form-control" id="metodoP" name="metodoP">
                                            <option id="1" name="1" value="ninguno">Seleccione un Metodo de Envio</option>
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
										<input type="number" class="form-control" name="costoEnvio" id="costoEnvio" maxlength="70">
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
										<input type="number" class="form-control" name="tiempoEntrega" id="tiempoEntrega" maxlength="200">
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
						<legend><i class="fas fa-book"></i>&nbsp; Politicas de Devolucion del Producto</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
    								<div class="form-group">
        								<label for="devolucionP" class="bmd-label-floating">Políticas de Devolución (PDF o Word)</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,35}"  class="form-control" name="devolucionP" id="devolucionP" maxlength="70">

        						<!--<input type="file" class="form-control" name="devolucionP" id="devolucionP" accept=".pdf,.doc,.docx">-->
    								</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="garantiaP" class="bmd-label-floating">Garantia</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,35}"  class="form-control" name="garantiaP" id="garantiaP" maxlength="70">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
                    <fieldset>
						<legend><i class="fas fa-file-shield"></i> &nbsp; Certificaciones y autenticidad del Producto</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
    								<div class="form-group">
        								<label for="certificacionP" class="bmd-label-floating">Certificaciones</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,35}"  class="form-control" name="certificacionP" id="certificacionP" maxlength="70">
        								<!--<input type="file" class="form-control" name="certificacionP" id="certificacionP" accept=".pdf,.doc,.docx">-->
    								</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="autP" class="bmd-label-floating">Autenticidad</label>
										<div class="input-group">
										<input type="number" class="form-control" name="autP" id="autP" maxlength="70">
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


