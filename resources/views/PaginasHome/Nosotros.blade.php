<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas --> 
    <title>Commcraft --  Sobre  Nosotros</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="imagen/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="imagen/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{('css/pages/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/pages/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/pages/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/pages/custom.css">
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
                        <p>Llamanos -> <a href="#"> +591 78654321</a></p>
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
                    <a class="navbar-brand" href="{{route('Home')}}"><img src="imagen/logo.png" class="logo" alt="100" height="auto"></a>
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
                    <h2>SOBRE NOSOTROS</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">SOBRE NOSOTROS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
				<div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="imagen/about-img.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">Nosotros somos <span>Commcraft</span></h2>
                    <p>En Commcraft, somos una empresa boliviana dedicada a brindar una plataforma en la que artesanos de diversas comunidades pueden publicar y vender sus productos artesanales al mundo. Nuestra misión es apoyar a los talentosos creadores locales, ayudándoles a compartir sus obras únicas y auténticas con un público más amplio. Trabajamos en estrecha colaboración con los artesanos para promover la rica diversidad cultural y la creatividad que define sus productos.</p>
                    <p>A través de nuestra plataforma, buscamos no solo ofrecer una vitrina digital para sus artesanías, sino también crear un puente entre las comunidades y los consumidores que valoran el arte hecho a mano y las tradiciones ancestrales. En Commcraft, creemos en el poder del comercio justo y en fortalecer las economías locales, mientras fomentamos la apreciación por la artesanía de calidad y la historia que cada pieza cuenta.</p>
					<a class="btn hvr-hover" href="#">Leer Más</a>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Nosotros somos de confianza</h3>
                        <p>En Commcraft, nosotras nos enorgullecemos de ser una plataforma de confianza para nuestros artesanos y clientes. Nos comprometemos a ofrecer un servicio seguro, transparente y responsable, asegurando que cada transacción sea justa y que los productos artesanales lleguen con la calidad que prometemos. La confianza es la base de nuestra relación con las comunidades y los consumidores, quienes valoran la autenticidad y la integridad de nuestro trabajo. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Nosotras somos profesionales</h3>
                        <p>En Commcraft, nosotras somos profesionales comprometidas con la excelencia en cada aspecto de nuestro trabajo. Desde la selección de productos artesanales hasta el servicio al cliente, actuamos con responsabilidad y dedicación, asegurando una experiencia impecable para artesanos y consumidores. Nuestro equipo se guía por altos estándares de calidad, garantizando que cada interacción esté marcada por la transparencia, la seguridad y la profesionalidad. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Nosotras somos expertas</h3>
                        <p>En Commcraft, nosotras somos expertas en conectar a artesanos locales con el mundo. Con una amplia experiencia en el manejo de productos artesanales y el comercio justo, garantizamos un servicio eficiente y profesional. Sabemos lo que se necesita para ofrecer una plataforma confiable que valore la autenticidad y las tradiciones, asegurando que cada producto artesanal llegue con la calidad que merece.</p>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Conozca a Nuestro Equipo</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="imagen/img-1.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Williamson</h3> <span class="post">Web Developer</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>David Torres – Fundador de MoveSmart
David lidera una startup de movilidad urbana que apuesta por transporte eléctrico compartido. Con su flota de scooters y bicicletas, busca reducir la contaminación y promover un estilo de vida más saludable.

"El futuro del transporte es inteligente y sostenible."</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="imagen/img-2.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Kristiana</h3> <span class="post">Artesano</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Ana González – Fundadora de EcoLife
Transformando residuos en productos sustentables, Ana lidera la creación de accesorios ecológicos que están revolucionando la moda sostenible. Su compromiso es reducir la huella ambiental sin perder estilo.

"Cada pequeño cambio suma hacia un futuro más verde."</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="imagen/img-3.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Steve Thomas</h3> <span class="post">Gerente</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Carlos Méndez – CEO de Tech4All
Apasionado por la inclusión digital, Carlos desarrolla soluciones tecnológicas accesibles para comunidades vulnerables. Desde dispositivos reacondicionados hasta cursos gratuitos, su visión es democratizar la tecnología.

"La innovación es efectiva cuando está al alcance de todos."</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="imagen/img-1.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Williamson</h3> <span class="post">Administrador</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Lucía Ramírez – Creadora de Dulce Pasión
Con amor por la repostería, Lucía convierte recetas tradicionales en experiencias gourmet. Desde su cocina local, ha llevado postres artesanales a mercados internacionales.

"El sabor de los recuerdos es el mejor ingrediente." </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->

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
							<h3>Hoja Informativa</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Enviar</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Redes Sociales</h3>
							<p>Sigue nuestras redes sociales y descubre las increíbles creaciones de nuestros artesanos locales. Únete a nuestra comunidad y apoya el talento artesanal boliviano. #Commcraft #ArtesaníaBoliviana #HechoAMano</p>
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
                            <h4>Acerca de commcraft</h4>
                            <p>En Commcraft, somos una empresa boliviana que ofrece una plataforma para que artesanos de comunidades locales publiquen y vendan sus productos. Apoyamos a los creadores locales, promoviendo su arte hecho a mano y conectándolos con consumidores que valoran la autenticidad y la tradición. Creemos en el comercio justo y en fortalecer las economías locales a través de la apreciación por la artesanía de calidad.</p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>INFORMACIÓN</h4>
                            <ul>
                                <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Srvicio al cliente</a></li>
                                <li><a href="#">Terminos &amp; Condiciones</a></li>
                                <li><a href="#">Política de Privacidad</a></li>
                                <li><a href="#">Informacion de Entrega</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contacta con nosotros</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Dirección: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Teléfono: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Correo electrónico: <a href="mailto:contactinfo@gmail.com">commcraft@gmail.com</a></p>
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