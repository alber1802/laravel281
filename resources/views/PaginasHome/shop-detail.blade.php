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
                            <li><a href="#"><i class="fa fa-user s_color"></i> MY CUENTA</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> DONDE ESTAMOS</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> CONTACTANOS</a></li>
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
                    <a class="navbar-brand" href="index.html"><img src="imagen/logo.png" class="logo" alt=""  width="100" height="auto"></a>
                </div>
                <!-- End Header Navigation -->

                 <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.html">INICIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">NOSOTROS</a></li>
                          <li class="nav-item"><a class="nav-link" href="shop.html">PRODUCTOS</a></li>

                        <li class="nav-item"><a class="nav-link" href="artesanos.html">ARTESANOS</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">CONTACTANOS</a></li>
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
                            <div class="carousel-item active"> <img class="d-block w-100" src="imagen/p1.webp" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="imagen/big-img-02.jpg" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="imagen/big-img-03.jpg" alt="Third slide"> </div>
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
                                <img class="d-block w-100 img-fluid" src="imagen/smp-img-01.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="imagen/smp-img-02.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="imagen/smp-img-03.jpg" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>Gallina Josefina</h2>
                        <h5> <del>$ 60.00</del> $40.79</h5>
                        <p class="available-stock"><span> Más de 20 disponibles / <a href="#">8 sold </a></span><p>
						<h4>Descripcion:</h4>
						<p> Es hora de decir basta a esas cajas de cartón para los huevos. Dentro de esta gallinita hecha de fibra de Manila (Phormium Tenax) en la desembocadura del río Imperial (Traytrayko leufu en mapudungun, “el río que corre cantando”) cabe más de una docena completa de huevos de gallinas libres, aunque también sirven para los otros, pero eso te traerá mal karma 😇. Práctica y decorativa, aunque no comas huevos se verá bien con lo que le pongas dentro! La M mide 34 cm de largo, 20 cm de alto y 25 cm de ancho. La L mide 44 cm de largo, 27 cm de alto y 32 cm de ancho.</p>
						<ul>
							<li>
								<div class="form-group quantity-box">
									<label class="control-label">Cantidad</label>
									<input class="form-control" value="0" min="0" max="20" type="number">
								</div>
							</li>
						</ul>

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
								<a class="btn hvr-hover" data-fancybox-close="" href="#">Comprar de nuevo</a>
								<a class="btn hvr-hover" data-fancybox-close="" href="#">Añadir al carrito</a>
							</div>
						</div>

						<div class="add-to-btn">
							<div class="add-comp">
								<a class="btn hvr-hover" href="#"><i class="fas fa-heart"></i> Añadir a la lista de deseos</a>
							</div>
							<div class="share-bar">
								<a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
								<a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
								<a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								<a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
								<a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
							</div>
						</div>
                    </div>
                </div>
            </div>
			
			<div class="row my-5">
				<div class="card card-outline-secondary my-4">
					<div class="card-header">
						<h2>Opiniones de los clientes</h2>
					</div>
					<div class="card-body">
						
						
						<hr>
						<div class="media mb-3">
							
							<div class="media-body">
								<p>Aún no hay opiniones. ¿Algún comentario? Háganos saber</p>
							</div>
						</div>
						<hr>
						<a href="#" class="btn hvr-hover">Escribir opiniones</a>
					</div>
				  </div>
			</div>

            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>¡Te podría Interesar!</h1>
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme">
                        <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="imagen/p5.webp" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="shop-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Añadir al carrito</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>Platos Albertios</h4>
                                    <h5> $9.79</h5>
                                </div>
                            </div>
                        </div>
                          <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="imagen/p6.webp" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="shop-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Añadir al carrito</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>Canasto papero con asas</h4>
                                    <h5> $9.79</h5>
                                </div>
                            </div>
                        </div>
                         <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="imagen/p4.webp" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="shop-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Añadir al carrito</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>Cuña Piñon</h4>
                                    <h5> $9.79</h5>
                                </div>
                            </div>
                        </div>
                         <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="imagen/p4.webp" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="shop-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Añadir al carrito</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>Platillo Abaco</h4>
                                    <h5> $9.79</h5>
                                </div>
                            </div>
                        </div>
                         <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="imagen/p5.webp" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="shop-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Añadir al carrito</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>Platos Albertios</h4>
                                    <h5> $9.79</h5>
                                </div>
                            </div>
                        </div>
                          <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="imagen/p5.webp" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="shop-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Añadir al carrito</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>Platos Albertios</h4>
                                    <h5> $9.79</h5>
                                </div>
                            </div>
                        </div>
                          <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="imagen/p5.webp" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="shop-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Añadir al carrito</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>Platos Albertios</h4>
                                    <h5> $9.79</h5>
                                </div>
                            </div>
                        </div>
                          <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="imagen/p5.webp" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="shop-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Añadir al carrito</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>Platos Albertios</h4>
                                    <h5> $9.79</h5>
                                </div>
                            </div>
                        </div>
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
     <!--importe -->

     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>
