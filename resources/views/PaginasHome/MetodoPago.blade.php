<!DOCTYPE html>
<html lang="en">
<!-- BasiQ -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Commcraft - Metodos de Pago</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('imagen/logo.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('imagen/logo.png') }}">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('css/pages/bootstrap.min.css') }}">
   <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/custom.css') }}">
      <!-- importacion de script -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--para el mensaje-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

     <style>
        .list-group-item:hover {
            background-color: #d4d6d4; /* #d7fcd7*/
            color: black; 
        }
        .custom-header {
            background-color: #017598; 
            color: white !important; 
        }
        .custom-title {
            font-size: 1.5rem;
            font-weight: bold; 
        }
    </style>

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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
						<bnt class="boton_registro" ><a href="{{route('login')}}">INICIAR SESION/ REGISTRARSE</a></bnt>
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
                    <a class="navbar-brand" href="{{route('Home')}}"><img src="{{asset('imagen/logo.png')}}" class="logo" alt="100" height="auto"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
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
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
           
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
                    <h2>Metodos de Pago</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">TIENDA</a></li>
                        <li class="breadcrumb-item active">PAGO</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->


<!-- PAGO -->


<section class="h-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-8">
        <div class="card" style="border-radius: 10px;">

            <div class="card-header px-4 py-5 custom-header">
                <h1 class="mb-0" style="color: white;">Métodos de Pago</h1>
            </div>

          <div class="card-body p-4">
            <div class="container">
              <h2 class="fw-bold mb-4">Selecciona un Método de Pago</h2>
              
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#tarjetaModal">
                    <h3 class="mb-1">Tarjeta de Crédito</h3>
                    <p class="text-muted">Paga con tu tarjeta de crédito de forma segura.</p>
                    <img src="{{ asset('imagen/payment-icon/1.png') }}" alt="Icono 1" class="img-fluid mx-2" style="max-width: 100px;">
                    <img src="{{ asset('imagen/payment-icon/2.png') }}" alt="Icono 2" class="img-fluid mx-2" style="max-width: 100px;">
                </a>
                
                <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#paypalModal">
                    <h3 class="mb-1">PayPal</h3>
                    <p class="text-muted">Usa tu cuenta de PayPal para realizar el pago.</p>
                    <img src="{{ asset('imagen/payment-icon/8.png') }}" alt="Icono 2" class="img-fluid mx-2" style="width: 200px; height: auto;">
                </a>
                
                <form action="{{ route('crear.qr') }}" method="POST" class="list-group-item">
                    @csrf
                    <input type="hidden" name="id_pedido" value="{{ $pedido->id_pedido }}">
                    <button type="submit" class="list-group-item list-group-item-action w-100" style="border: none; background: none; padding: 0;">
                        <h3 class="mb-1">Transferencia Bancaria</h3>
                        <p class="text-muted">Realiza una transferencia directa a nuestra cuenta bancaria usando QR.</p>
                        <img src="{{ asset('imagen/payment-icon/qr.png') }}" alt="Icono 2" class="img-fluid mx-2" style="width: 200px; height: auto;">
                    </button>
                </form>
             </div>
 
            <div class="pt-4">
              <p class="fw-bold mb-0">Detalles del Pedido</p>
            </div>
            
            <div class="d-flex justify-content-between pt-2">
              <div>
                <p class="text-muted mb-0"><span class="fw-bold me-4">Total a pagar:</span></p>
              </div>
              <div class="align-self-end">
                <p class="text-muted mb-0 fw-bold">{{ number_format($pedido->total_pagar, 0) }} Bs.</p>
              </div>
            </div>

            <!-- Botón de Cancelar Pedido -->
            <div class="d-flex justify-content-between pt-4">
                <form action="{{ route('pedido.cancelar', $pedido->id_pedido) }}" method="POST" class="flex-grow-1 me-2">
                  @csrf
                  @method('DELETE') 
                  <button type="submit" class="btn btn-danger w-100">Cancelar Pedido</button>
                </form>
                
                <form action="{{ route('Home') }}" method="GET" class="flex-grow-1 ms-2">
                  <button type="submit" class="btn btn-success w-100">Volver a Inicio</button>
                </form>
            </div>
              
              <p class="text-muted mt-3 text-center">Si decides cancelar, tu pedido no podrá ser recuperado.</p>


          </div>


        </div>
      </div>
    </div>
  </div>
</section>


<!-- End PAGO -->

<!-- Tarjeta-->
<div class="modal fade" id="tarjetaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Ingresa los datos de tu tarjeta</h1>    
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('tarjeta.agregar') }}" method="POST">
        <div class="modal-body">
                @csrf
                <input type="hidden" name="id_pedido" value="{{$pedido->id_pedido}}"> 

                <!-- Contenedor para las imágenes -->
                <div class="mb-4 text-center">
                    <img src="{{ asset('imagen/payment-icon/1.png') }}" alt="Icono 1" class="img-fluid mx-2" style="max-width: 100px;">
                    <img src="{{ asset('imagen/payment-icon/2.png') }}" alt="Icono 2" class="img-fluid mx-2" style="max-width: 100px;">
                </div>
                <!-- /Contenedor para las imágenes -->
                <div class="form-outline mb-4">
                    <input type="text" name="nombre_titular" class="form-control form-control-lg" 
                        placeholder="Nombre" required autocomplete="cc-name" />
                    <label class="form-label" for="nombre_titular">Nombre del titular</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" name="numero_cuenta" class="form-control form-control-lg" 
                        placeholder="1234 5678 9012 3457" required autocomplete="cc-number" minlength="19" maxlength="19" />
                    <label class="form-label" for="numero_cuenta">Numero de tarjeta</label>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="text" name="fecha_expiracion" class="form-control form-control-lg" 
                                placeholder="MM/YYYY" required autocomplete="cc-exp" minlength="7" maxlength="10" />
                            <label class="form-label" for="fecha_expiracion">Expiracion</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="password" name="cvv" class="form-control form-control-lg" 
                                placeholder="&#9679;&#9679;&#9679;" required autocomplete="cc-csc" minlength="3" maxlength="3" />
                            <label class="form-label" for="cvv">Cvv</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo de Tarjeta</label>
                    <select name="tipo" class="form-select" id="tipo" required>
                        <option value="">Selecciona...</option>
                        <option value="Visa">Visa</option>
                        <option value="MasterCard">MasterCard</option>
                        <option value="American Express">American Express</option>
            
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Agregar tarjeta</button>
        </div>
        </form>
        </div>
    </div>
    </div>
    <!--end add model-->

<!-- PAYPAL -->
<div class="modal fade" id="paypalModal" tabindex="-1" aria-labelledby="paypalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="paypalModalLabel">Completa tu pago</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
               
            <form action="{{ route('agregar.paypal') }}" method="POST">
                <div class="modal-body">
                    @csrf

                    <input type="hidden" name="id_pedido" value="{{$pedido->id_pedido}}"> 
                    <div class="mb-4 text-center">
                    <img src="{{ asset('imagen/payment-icon/8.png') }}" alt="Icono 2" class="img-fluid mx-2" style="width: 200px; height: auto;">
                    </div>
                    <!-- correo Electrnico -->
                    <div class="mb-4">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" name="correo" class="form-control" placeholder="correo@example.com" required />
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Pagar con:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo_pago" id="visa" value="Visa" required>
                            <label class="form-check-label" for="visa">
                                Visa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo_pago" id="mastercard" value="MasterCard" required>
                            <label class="form-check-label" for="mastercard">
                                MasterCard
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo_pago" id="amex" value="American Express" required>
                            <label class="form-check-label" for="amex">
                                American Express
                            </label>
                        </div>
 
                    </div>

                    <!-- Monto Prellenado -->
                    <div class="mb-4">
                        <label for="monto" class="form-label">Monto</label>
                        <input type="text" name="monto" class="form-control" placeholder="$total" value="{{ $pedido->total_pagar }}" readonly />
                    </div>

                    <!-- Botón para Pagar -->
                    <button type="submit" class="btn btn-primary">Pagar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--termina odal-->

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
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                            <h4>About Freshshop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
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
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
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
    <script src="{{asset('js/pages/pedido.js') }}"></script>
     <!--importe -->

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>    
   <!--para el mensaje-->

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

   <script>
function changeQuantity(button, change) {
    const input = button.closest('.d-flex').querySelector('input[name="quantity"]'); 
    let currentValue = parseInt(input.value) || 0;
    

    currentValue += change;


    if (currentValue < 0) {
        currentValue = 0;
    }


    input.value = currentValue;


    const productId = button.closest('.row').querySelector('[data-id]').dataset.id; 


    updateQuantityOnServer(productId, currentValue);
}

function updateQuantityOnServer(productId, quantity) {
    fetch('/update-quantity', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' 
        },
        body: JSON.stringify({ id: productId, quantity: quantity })
    })
    .then(response => {

        if (!response.ok) {
            return response.text().then(text => {
                throw new Error(`Error ${response.status}: ${text}`);
            });
        }
        return response.json();
    })
    .then(data => {
        console.log('Cantidad actualizada:', data);
        toastr.success('Cantidad actualizada a: ' + data.quantity); // Usar Toastr en lugar de alert
    })
    .catch(error => {
        console.error('Error al actualizar la cantidad:', error);
        toastr.error('Error al actualizar la cantidad: ' + error.message); // Mostrar error con Toastr
    });


}

$(document).ready(function() {
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "timeOut": "5000" // Tiempo en milisegundos
        };

        @if(session('tarjeta_agregada'))
            toastr.info("{{ session('tarjeta_agregada') }}");
        @endif

        @if(session('paypal_agregado'))
            toastr.info("{{ session('paypal_agregado') }}");
        @endif
    });


</script>



</body>

</html>