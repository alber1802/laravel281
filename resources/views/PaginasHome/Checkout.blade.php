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
    

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="right-phone-box">
                        <p>Llamanos:- <a href="#"> +11 900 800 100</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#"><i class="fa fa-user s_color"></i> Mi cuenta</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Nuestra Ubicacion</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> Contactanos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
						<select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
							<option>Registrate aqui</option>
							<option>Inicia sesion</option>
						</select>
					</div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% de descuento en toda la compra. Codigo promocional: 6443
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% de descuento!
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 10% de descuento!
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% de descuento. Compra Ya!
                                </li>
                        
                            </ul>
                        </div>
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
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Tienda</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html">Sidebar Shop</a></li>
								<li><a href="shop-detail.html">Shop Detail</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
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
                        <!--<li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
							<p>My Cart</p>
                        -->
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- 
            Start Side Menu -->
            
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
                    <h2>Pago</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tienda</a></li>
                        <li class="breadcrumb-item active">Pago</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Iniciar sesion en la cuenta</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Haga click para iniciar sesion</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formLogin">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputEmail" class="mb-0">Correo electronico</label>
                                <input type="email" class="form-control" id="InputEmail" placeholder="Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword" class="mb-0">Contraseña</label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="Contraseña"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">iniciar sesion</button>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Crea una nueva cuenta</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Haga click aqui para registrarse</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formRegister">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">Nombre</label>
                                <input type="text" class="form-control" id="InputName" placeholder="Nombre"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Apellido</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Apellido"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Correo Electronico</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">Contraseña</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Contraseña"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Registrarse</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Direccion de envio</h3>
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Nombre *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Apellido *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Nombre de usurio *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" placeholder="" required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Correo electronico *</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Direccion*</label>
                                <input type="text" class="form-control" id="address" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Pais *</label>
                                    <select class="wide w-100" id="country">
									<option value="Choose..." data-display="Select">Elige...</option>
									<option value="United States">Bolivia</option>
								</select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Ciudad *</label>
                                    <select class="wide w-100" id="state">
									<option data-display="Select">Elige...</option>
									<option>La Paz</option>
								</select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                
                            </div>
                            <hr class="mb-4">
                            
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save-info">
                                <label class="custom-control-label" for="save-info">Guarda esta informacion para la proxima</label>
                            </div>
                            <hr class="mb-4">
                            <div class="title"> <span>Pago</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Tarjeta de credito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="debit">Tarjeta de debito</label>
                                </div>
                        
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required> <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback"> Nombre en la tarjeta </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Numero de Tarjeta de Credito</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback"> Credit card number is required </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Vencimiento</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback"> Expiration date required </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback"> Security code required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="imagen/payment-icon/1.png" alt=""></li>
                                            <li><img class="img-fluid" src="imagen/payment-icon/2.png" alt=""></li>
                                            <li><img class="img-fluid" src="imagen/payment-icon/3.png" alt=""></li>
                                            <li><img class="img-fluid" src="imagen/payment-icon/5.png" alt=""></li>
                                            <li><img class="img-fluid" src="imagen/payment-icon/7.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-1"> </form>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Metodo de envio</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Entrega estadar</label> <span class="float-right font-weight-bold">20.00 Bs BOB</span> </div>
                                    <div class="ml-4 mb-2 small">(3-7 dias habiles)</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Carro de la compra</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html"> Vasija</a>
                                            <div class="small text-muted">Precio: 80.00 Bs <span class="mx-2">|</span> Cantidad: 1 <span class="mx-2">|</span> Subtotal: 80.00 Bs </div>
                                        </div>
                                    </div>
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html"> Canasta</a>
                                            <div class="small text-muted">Precio: 32.00 Bs  <span class="mx-2">|</span> Cantidad: 1 <span class="mx-2">|</span> Subtotal: 32.00 Bs </div>
                                        </div>
                                    </div>
                                    <div class="media mb-2">
                                        <div class="media-body"> <a href="detail.html"> Tejido</a>
                                            <div class="small text-muted">Precio: 54.00 Bs  <span class="mx-2">|</span> Cantidad: 1 <span class="mx-2">|</span> Subtotal: 54.00 Bs </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Su pedido</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Su pedido</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"> 166.00 Bs </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Descuento </h4>
                                    <div class="ml-auto font-weight-bold"> 30.00 Bs </div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Cupon de descuento</h4>
                                    <div class="ml-auto font-weight-bold"> 5.00 Bs </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Impuesto </h4>
                                    <div class="ml-auto font-weight-bold"> 2.00 Bs  </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Costo de envio</h4>
                                    <div class="ml-auto font-weight-bold"> 20.00 Bs </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Total</h5>
                                    <div class="ml-auto h5"> 153.00 Bs </div>
                                </div>
                                <hr> </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <a href="checkout.html" class="ml-auto btn hvr-hover">Realizar pedido</a> </div>
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
							<h3>Horario de Atención</h3>
							<ul class="list-time">
                                <li>Lunes - Viernes: 08.00am a 05.00pm</li> <li>Sabado: 10.00am a 08.00pm</li> <li>Domingo: <span>Cerrado</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Hoja informativa</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Enviar</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Redes Sociales</h3>
							<p>Donde la tradicion se encuentra con la innovacion. Descubre lo mejor de las comunidades artesanales en un solo lugar.</p>
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
                            <h4>Sobre Commcraft</h4>
                            <p>COMMCRAFT es una plataforma dedicada a promover y comercializar productos artesanales auténticos, creados por comunidades locales. Nos enfocameos en apoyar a los artesanos y preservar técnicas tradicionales que reflejan la riqueza cultural de cada region.</p> 
							<p>En COMMCRAFT nos esforzamos por conectar a los consumidores con productos unicos, sostenibles y de alta calidad, mientras apoyamos a las comunidades a crecer y prosperar a traves de su trabajo artesanal.</p> 	
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>INFORMACIÓN</h4>
                            <ul>
                            <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Servicio al Cliente</a></li>
                                <li><a href="#">Nuestro mapa del sitio</a></li>
                                <li><a href="#">Terminos &amp; Condiciones</a></li>
                                <li><a href="#">Politica de Privacidad</a></li>
                                <li><a href="#">Información de Delivery</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contactanos</h4>
                            <ul>
                            <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Dirección: El Prado, Avenida 16 de Julio N°1544,<br> zona central de la ciudad de La Paz </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Telefono: <a href="tel:+1-888705770">+591 72504099</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">commcraft@gmail.com</a></p>
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
    <!-- jquery -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>
