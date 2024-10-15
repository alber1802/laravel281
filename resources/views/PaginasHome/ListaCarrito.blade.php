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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="imagen/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="imagen/logo.png">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('css/pages/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/custom.css') }}">
      <!-- importacion de script -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>



<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					
                    <div class="text-slid-box">
                        
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
                    <a class="navbar-brand" href="index.html"><img src="imagen/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">Sobre Nosotros</a></li>
						<li class="dropdown active">
							<a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">TIENDA</a>
							<ul class="dropdown-menu">
								<li><a href="shop.html">Sidebar Shop</a></li>
								<li><a href="shop-detail.html">Shop Detail</a></li>
								<li><a href="cart.html">Cart</a></li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="my-account.html">My Account</a></li>
								<li><a href="wishlist.html">CARRITO</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="gallery.html">Galeria</a></li>
						<li class="nav-item"><a class="nav-link" href="contact-us.html">Contactanos</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
							<p>Mi Carrito</p>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="imagen/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="imagen/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="imagen/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
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
                    <h2>CARRITO</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">TIENDA</a></li>
                        <li class="breadcrumb-item active">CARRITO</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif




    <!-- CARRITO -->
    <section class="h-100 h-custom" style="background-color: #017598;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
              <div class="card-body p-0">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <div class="p-5">
                      <div class="d-flex justify-content-between align-items-center mb-5">
                        <h1 class="fw-bold mb-0">Mi Carrito</h1>
                        <h4 class="mb-0 text-muted">{{ count($productos) }} productos</h4>
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-5">
                        <h3 class="fw-bold mb-0">Imagen</h3>
                        <h3 class="fw-bold mb-0">Precio</h3>
                        <h3 class="fw-bold mb-0">Cantidad</h3>
                        <h3 class="fw-bold mb-0">Eliminar</h3>
                      </div>
                        @php
                            $total = 0; // Inicializa el total
                            $descuento = 0; // Inicializa el descuento
                            $total_pro = 0;

                        @endphp
                      @foreach ($productos as $item)
                        <hr class="my-4">
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                            <img
                                src="{{ asset($item->producto->imgP) }}"
                                class="img-fluid rounded-3" alt=" ">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                            <h4 class="text-muted">{{ $item->producto->nombreP }}</h4>
                            <h4 class="mb-0">Precio por unidad: {{ $item->producto->precioP }} Bs.</h4>
                            </div>


                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex" data-id="{{ $item->id_producto}}">
                                <button class="btn btn-link px-2" onclick="changeQuantity(this, -1)">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="{{ $item->cantidadPP ?? 0 }}" type="number"
                                    class="form-control form-control-sm text-center custom-input" />
                                <button class="btn btn-link px-2" onclick="changeQuantity(this, 1)">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>


                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                @php
                                    $subtotal = ($item->cantidadPP ?? 0) * $item->producto->precioP; // Calcula el subtotal
                                    $total += $subtotal; // Suma al total
                                    $total_pro+=$item->cantidadPP;
                                @endphp
                            <h3 class="mb-0">{{ $subtotal }} Bs.</h3>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <form action="{{ route('carrito.eliminar', $item->id_producto) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="btn btn-link text-muted" style="padding: 0;">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                      @endforeach
                                     @php
                                        // Determina el descuento basado en la cantidad de productos
                                        $cantidadProductos = $total_pro;
                                        if ($cantidadProductos > 12) {
                                            $descuento = 0.25; // 25%
                                            $porcentaje='25%';
                                        } elseif ($cantidadProductos >= 9) {
                                            $descuento = 0.15; // 15%
                                            $porcentaje = '15%';
                                        } elseif ($cantidadProductos >= 6) {
                                            $descuento = 0.10; // 10%
                                            $porcentaje = '10%';
                                        }
                                        $descuentoAplicado = $total * $descuento; 
                                        $totalConDescuento = $total - $descuentoAplicado; 
                                    @endphp
                      <div class="pt-5">
                        <h4 class="mb-0"><a href="{{ route('carrito.tienda') }}" class="text-body"><i
                              class="fas fa-long-arrow-alt-left me-2"></i>Volver a tienda</a></h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 bg-body-tertiary">
                    <div class="p-5">
                      <h1 class="fw-bold mb-0 mt-2 pt-1"> Cantidad a Pagar</h1>
                      <hr class="my-4">

                      <div class="d-flex justify-content-between mb-4">
                        <h3 class="text-uppercase">TOTAL DE PRODUCTOS</h3>
                        <h3> {{ $total_pro }} productos</h3>
                      </div>

                      <div class="d-flex justify-content-between mb-4">
                        <h3 class="text-uppercase"> PRECIO TOTAL</h3>
                        <h3> {{ $total }} Bs.</h3>
                      </div>
                      @if ($descuento > 0)
                      <hr class="my-4">
                       <div class="d-flex justify-content-between mb-0">
                           <h3 class="text-uppercase">Descuento</h3>
                           <h3>{{ $descuentoAplicado }} Bs.</h3> <!-- descuento aplicado -->
                      </div>
                      <p>Recibió un descuento del {{ $porcentaje }}!</p> <!-- porcentaje de descuento -->
                       @endif
                       <hr class="my-4">
                      <div class="d-flex justify-content-between mb-5">
                        <h3 class="text-uppercase">TOTAL A PAGAR</h3>
                        <h3> {{ $totalConDescuento }} Bs.</h3>
                      </div>
                      <hr class="my-4">
                      <h1 class="fw-bold mb-0">Metodo de pago</h1>

                      <div class="mb-7 pb-2">
                            
                           <div class="mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paypalModal">
                                    Pagar con PayPal
                                </button>
                            </div>    
                            <div class="mb-3">
                                
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tarjetaModal">
                                    Pagar con Tarjeta
                                    </button>
                               
                            </div>

                            <div class="mb-3">
                                <form action="{{route('crear.qr')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_cliente" value="{{$productos->first()->carrito->id_cliente}}">
                                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=" ">
                                        Generar QR
                                    </button>
                                </form>
                            </div>
                      </div>
                    
                      <td class="add-pr">
                            <form action= "{{ route('pedido.agregar') }}" method="POST">
                              @csrf
                                <input type="hidden" name="total_pagar" value="{{ $totalConDescuento }}">
                                <input type="hidden" name="descuento" value="{{ $descuentoAplicado }}">
                                <input type="hidden" name="fecha_pedido" value="{{ now()->format('Y-m-d') }}">
                                <input type="hidden" name="estadoP" value="pendiente"> 
                                <input type="hidden" name="id_carrito" value="{{$productos->first()->carrito->id_carrito}}"> 
                                <input type="hidden" name="id_cliente" value="{{$productos->first()->carrito->id_cliente}}">


                                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-block btn-lg"
                                    data-mdb-ripple-color="dark">Confirmar Pedido
                                </button>
                            </form>
                        </td>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        <!-- End CARRTO-->

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
                <input type="hidden" name="id_cliente" value="{{$productos->first()->carrito->id_cliente}}"> <!-- Campo oculto para id_metodoP -->

                <!-- Contenedor para las imágenes -->
                <div class="mb-4 text-center">
                    <img src="{{ asset('imagen/payment-icon/1.png') }}" alt="Icono 1" class="img-fluid mx-2" style="max-width: 100px;">
                    <img src="{{ asset('imagen/payment-icon/2.png') }}" alt="Icono 2" class="img-fluid mx-2" style="max-width: 100px;">
                    <img src="{{ asset('imagen/payment-icon/5.png') }}" alt="Icono 5" class="img-fluid mx-2" style="max-width: 100px;">
                </div>
                <!-- Contenedor para las imágenes -->
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

                    <input type="hidden" name="id_cliente" value="{{$productos->first()->carrito->id_cliente}}"> <!-- Campo oculto para id_metodoP -->
                    <div class="mb-4 text-center">
                       <img src="{{ asset('imagen/payment-icon/5.png') }}" alt="Icono 5" class="img-fluid mx-2" style="max-width: 100px;">
                    </div>
                    <!-- correo Electrnico -->
                    <div class="mb-4">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" name="correo" class="form-control" placeholder="correo@example.com" required />
                    </div>

                    <!-- Contraseña -->
                    <div class="mb-4">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required />
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
                        <input type="text" name="monto" class="form-control" placeholder="$totalConDescuento" value="{{ $totalConDescuento }}" readonly />
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
                    <img src="imagen/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="imagen/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="imagen/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="imagen/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="imagen/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="imagen/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="imagen/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="imagen/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="imagen/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="imagen/instagram-img-05.jpg" alt="" />
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
        alert('Cantidad actualizada a: ' + data.quantity);
    })
    .catch(error => {
        console.error('Error al actualizar la cantidad:', error);
    });


}




</script>

</body>

</html>
