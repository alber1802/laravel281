<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('imagen/logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('imagen/logo.png')}}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/catalogo.css') }}">
      <!-- importacion de script -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--para el mensaje de confirmacion y errror-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    
</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                      
                    </div>
                    <div class="right-phone-box">
                        <p> LLAMANOS -> <a href="#"> +591 78654321 </a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="{{route('PerfilUsuario')}}"><i class="fa fa-user s_color"></i> MY CUENTA</a></li>
                            <li><a href="{{route('contactanos')}}"><i class="fas fa-location-arrow"></i> DONDE ESTAMOS</a></li>
                            <li><a href="{{route('nosotros')}}"><i class="fas fa-headset"></i> CONTACTANOS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{asset('imagen/logo.png')}}" class="logo" alt=""  width="100" height="auto"></a>
                </div>
                <!-- End Header Navigation -->

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="{{route('Home')}}">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('nosotros')}}">SOBRE NOSOTROSs</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">TIENDA</a> 
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('ver.catalogo') }}">Catalogo</a></li>
                                <li><a href="{{route('carrito.mostrar')}}">Carrito</a></li>             
                            </ul>
                        </li>
                        
                        <li class="nav-item"><a class="nav-link" href="{{route('contactanos')}}">CONTACTANOS</a></li>
                    </ul>
                </div>

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
          
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Detalle del Producto </h2>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{ asset($detalles->producto->imgP)}}" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="{{ asset($detalles->producto->imgP)}}" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="{{ asset($detalles->producto->imgP)}}" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="{{ asset($detalles->producto->imgP)}}" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="{{ asset($detalles->producto->imgP)}}" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="{{ asset($detalles->producto->imgP)}}" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>Nombre del Producto : {{ $detalles->producto->nombreP }} </h2>
                        <h5>Precio :  <del>BOB  {{ $detalles->producto->descuentoP }}  </del>   {{ $detalles->producto->precioP }} </h5>
                        <p class="available-stock"><span>  Nombre Artesano  : {{ $detalles->artesano->user->name }} {{ $detalles->artesano->user->materno }} {{ $detalles->artesano->user->paterno }} </span><p>
						<h4>Descripcion:</h4>
						<p> {{ $detalles->producto->descripcionP}}</p> 
                        <h4>Politicas de devolucion :</h4> <p> {{ $detalles->producto->devolucionP}}</p>
						<ul>
							<li>
								<div class="form-group quantity-box">
									<label class="control-label">Cantidad</label>
									<input class="form-control" value="0" min="0" max="{{ $detalles->producto->stock }}" type="number">
								</div>
							</li>
						</ul>

						<div class="price-box-bar">
                            <form action="{{ route('agregar.producto') }}" method="POST" style="display: inline;">
                                @csrf
                                 <input type="hidden" name="id_producto" value="{{$detalles->producto->id_producto }}">
                                <div class="cart-and-bay-btn">
                                    <button type="submit" class="btn btn1">
                                            <i class="fa fa-shopping-cart"></i> Añadir a carrito
                                    </button>
                                </div>
                            </form>
						</div>

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
							
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCliente"><i class="fas fa-plus fa-fw"></i> &nbsp; Dejar Comentario Sobre Producto </button>
							</div>
						</div>
                    </div>
                </div>
            </div>
                <form name="registroC" class="form-neon" action="{{ route('registrar.resena', ['id' =>  $detalles->producto->id_producto]) }}" method="POST" > 
					@csrf
					<div class="modal fade" id="ModalCliente" tabindex="-1" role="dialog" aria-labelledby="ModalCliente" aria-hidden="true">
					
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								
									<div class="modal-header">
										<h5 class="modal-title" id="ModalCliente">Dejar el Comentario </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

									<div class="modal-body">
										<div class="container-fluid">
											<div class="form-group">
												<label for="nombreCa" class="bmd-label-floating">Escribe tu comentario</label>
												<textarea class="form-control" name="comentario" id="comentario" rows="5" maxlength="500" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,500}"></textarea>
											</div>
											<div class="form-group">
												<label for="descripcionCa" class="bmd-label-floating">Deja un Calificacion </label>
												<input placeholder='Califica del 1 al 10 siendo 10 la mejor calificacion' type="number" pattern="{1,10}" class="form-control" name="calificacionR" id="calificacionR" max=10 >
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
				
                				</div>
                			</div>
            		</div>
				</form>
			 <!-- End All Title Box
			<div class="row my-9">
				<div class="card card-outline-secondary my-4">
					<div class="card-header">
						<h2>Dejar Comentario sobre el producto </h2>
					</div>
					<form action="">
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea id="descripcion" placeholder="Describe tu experiencia o información adicional"></textarea>
                    </div>


                    </form>
				  </div>
			</div>
            -->
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>¡Te podría Interesar!</h1>
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme">
                        @if(!empty($productosRelacionados) && count($productosRelacionados) > 0)
                            @foreach($productosRelacionados as $producto)
                            <div class="col">
                                    <div class="product-card">
                                        <div class="box-img-hover">
                                            <img src="{{asset($producto->imgP) }}" class="img-carrucel" alt="Image" >
                                        </div>
                                        <div class="product-card-body">
                                            <p class="product-brand">ARTESANO</p>
                                            <h5 class="product-name">
                                                <a href="">
                                                    {{$producto->nombreP}}
                                                </a>
                                            </h5>
                                            <div>
                                                <span class="selling-price">{{ number_format($producto->precioP, 0) }} Bs.</span>
                                            
                                            </div>
                                            <div class="mt-2">
                                                <form action="{{ route('agregar.producto') }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    <input type="hidden" name="id_producto" value="{{ $producto->id_producto }}">
                                                    <button type="submit" class="btn btn1">
                                                        <i class="fa fa-shopping-cart"></i> Añadir a carrito
                                                    </button>
                                                </form>
                                                <a href="" class="btn btn1"><i class="fa fa-heart"></i></a>
                                                <a href="{{route('Ver.Detalle.Producto', ['id' => $producto->id_producto])}} " class="btn btn1">Ver</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                        @else
                             <div class="col-12 text-center">
                               <p>No hay productos disponibles</p>
                            </div>
                        @endif 
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('imagen/instagram-img-01.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('imagen/instagram-img-02.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('imagen/instagram-img-03.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('imagen/instagram-img-04.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('imagen/instagram-img-05.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('imagen/instagram-img-06.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('imagen/instagram-img-07.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('imagen/instagram-img-08.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('imagen/instagram-img-09.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('imagen/instagram-img-05.jpg')}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
     <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>ATENCION</h3>
                            <ul class="list-time">
                                <li>Lunes - Viernes: 08.00am a 05.00pm</li> <li>Sabado: 10.00am a 08.00pm</li> <li>Domingo: <span>Cerrado</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>REDES SOCIALES</h3>
                            <p>Puede encontranos en:</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>ACERCA DE COMMCRAFT</h4>
                            <p>CommCraft es una plataforma de e-commerce dedicada a la promoción y comercialización de productos artesanales hechos a mano por comunidades locales. </p> 
                            <p>Nuestro objetivo es conectar a los consumidores con los artesanos, permitiendo que los productos tradicionales y únicos lleguen a un público más amplio, mientras apoyamos la economía local y contribuimos a la preservación de culturas y tradiciones ancestrales. </p>                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>INFORMACION</h4>
                            <ul>
                                <li><a href="#">Sobre nosotros</a></li>
                                <li><a href="#">Servicio al cliente</a></li>
                                <li><a href="#">Condicion &amp;  Terminos</a></li>
                                <li><a href="#">Politicas de privacidad</a></li>
                                <li><a href="#">Informacion CDelivery </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>CONTACTA CON NOSOTROS</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Direccion: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Telefono: <a href="tel:+1-888705770">+591 69970381</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">tiendavirtalcommcraft@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->

    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

   <!-- ALL JS FILES -->
   <script src="{{asset('js/pages/jquery-3.2.1.min.js') }}"></script>
    <script src="{{asset('js/pages/popper.min.js') }}"></script>
    <script src="{{asset('js/pages/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('js/pages/jquery.superslides.min.js') }}"></script>
    <script src="{{asset('js/pages/bootstrap-select.js') }}"></script>
    <script src="{{asset('js/pages/inewsticker.js') }}"></script>
    <script src="{{asset('js/pages/bootsnav.js') }}"></script>
    <script src="{{asset('js/pages/images-loded.min.js') }}"></script>
    <script src="{{asset('js/pages/isotope.min.js') }}"></script>
    <script src="{{asset('js/pages/owl.carousel.min.js') }}"></script>
    <script src="{{asset('js/pages/baguetteBox.min.js') }}"></script>
    <script src="{{asset('js/pages/form-validator.min.js') }}"></script>
    <script src="{{asset('js/pages/contact-form-script.js') }}"></script>
    <script src="{{asset('js/pages/custom.js') }}"></script>
     <!--importe -->

     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!----- para el mesanje de error y confirmacion de carrito 
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


     <script>
    $(document).ready(function() {
        @if(session('carrito_vacio'))
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
                "timeOut": "5000", // Tiempo en milisegundos
            };
            toastr.warning("{{ session('carrito_vacio') }}", 'Agrega productos!', { timeOut: 12000 });
        @endif

        @if(session('agregar_producto'))
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
                "timeOut": "5000", // Tiempo en milisegundos
            };
            toastr.success("{{ session('agregar_producto') }}");
        @endif

        @if(session('Registro_comentario'))
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
                "timeOut": "5000", // Tiempo en milisegundos
            };
            toastr.success("{{ session('Registro_comentario') }}");
        @endif
    });

    </script>
</body>

</html>
