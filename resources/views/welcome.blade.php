<!DOCTYPE html>
<html lang="en">
<!-- Basi -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title> --Ecommerce --</title>
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
     <!-- importacion de script -->
     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <style>
        /* Estilos básicos del carrusel */
        .carousel-container {
            position: relative;
            width: 80%;
            max-width: 800px;
            margin: auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.5);
        }

        .carousel-slide {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-image {
            min-width: 100%;
            transition: opacity 0.5s ease-in-out;
        }

        /* Estilos de los botones de navegación */
        .carousel-button {
            position: absolute;
            top: 50%;
            width: 50px;
            height: 50px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 24px;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        /* Animación de transición automática */
        @keyframes slide {
            0% { transform: translateX(0); }
            20% { transform: translateX(-100%); }
            40% { transform: translateX(-200%); }
            60% { transform: translateX(-300%); }
            80% { transform: translateX(-400%); }
            100% { transform: translateX(0); }
        }

        /* Activación de animación automática */
        .carousel-slide {
            animation: slide 20s infinite;
        }
        .img-bloger {
            width: 100%;          /* El contenedor ocupa el ancho máximo disponible */
            max-width: 400px;     /* Tamaño máximo opcional del contenedor */
            height: auto;         /* Permite que el contenedor ajuste su altura */
            overflow: hidden;     /* Oculta cualquier desbordamiento */
            border-radius: 10px;  /* Bordes redondeados */
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2); /* Sombra para destacar el contenedor */
            display: flex;
            align-items: center;  /* Centrado vertical de la imagen */
            justify-content: center; /* Centrado horizontal de la imagen */
            background-color: #f5f5f5; /* Color de fondo para cuando la imagen es pequeña */
        }

        .img-blo {
            max-width: 100%;     /* Imagen ajusta al ancho del contenedor */
            max-height: 100%;    /* Imagen ajusta a la altura del contenedor */
            object-fit: cover;   /* La imagen se recorta para ocupar todo el espacio disponible */
            border-radius: 10px; /* Coincide con el borde del contenedor */
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

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="imagen/home3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>BIENVENIDO A <br> COMMCRAFT </strong></h1>
                            <p class="m-b-40">Donde la tradición se encuentra con la innovación. Descubre lo mejor de las comunidades artesanales en un solo lugar</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="imagen/home1.jfif" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>BIENVENIDO A<br> COMMCRAFT </strong></h1>
                            <p class="m-b-40">Donde la tradición se encuentra con la innovación. Descubre lo mejor de las comunidades artesanales en un solo lugar</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="imagen/home5.webp" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>BIENVENIDO A <br> 
                                COMMCRAFT  
                            </strong></h1>
                            <p class="m-b-40">Donde la tradición se encuentra con la innovación. Descubre lo mejor de las comunidades artesanales en un solo lugar.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-blo" src="imagen/ca3.webp" alt="" />
                        <a class="btn hvr-hover" href="#">Hermoso</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-blo" src="imagen/ca2.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Bellor</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-blo" src="imagen/ca1.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Magistral</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-blo" src="imagen/pro1.jpg" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-blo" src="imagen/pro2.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->
    <div class="carousel-container">
        <div class="carousel-slide">
            <img src="{{asset('imagen/img-pro-01.jpg')}}" alt="Imagen 1" class="carousel-image">
            <img src="{{asset('imagen/img-pro-02.jpg')}}" alt="Imagen 2" class="carousel-image">
            <img src="{{asset('imagen/img-pro-03.jpg')}}" alt="Imagen 3" class="carousel-image">
            <img src="{{asset('imagen/img-pro-04.jpg')}}" alt="Imagen 4" class="carousel-image">
            <img src="{{asset('imagen/ins-bg.jpg')}}" alt="Imagen 5" class="carousel-image">
        </div>
        <button class="carousel-button prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="carousel-button next" onclick="moveSlide(1)">&#10095;</button>
    </div>


    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Lo  mejor de los productos </h1>
                        <p>Realizados con una excelente calidad y con materiales de primera para la satisfaccion del cliente</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="img-bloger"> 
                            <img class="img-blo" src="imagen/gale1.jpg" alt="" /> 
                        </div> 
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Vasija de Barro Pintada a Mano</h3>
                                <p>Esta vasija está hecha de barro natural y pintada a mano por artesanos locales. Cada diseño es único, con patrones inspirados en la naturaleza y la cultura tradicional. Es ideal para decorar espacios con un toque rústico y auténtico.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="img-bloger"> 
                            <img class="img-blo" src="imagen/gale2.jpg" alt="" /> 
                        </div> 
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Tapiz Tejido de Lana</h3>
                                <p>
                                Este tapiz está elaborado con lana de alta calidad y teñido con pigmentos naturales. Sus colores y texturas transmiten calidez, convirtiéndolo en un complemento perfecto para colgar en paredes y dar vida a cualquier ambiente.
                                </p>    
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="img-bloger"> 
                            <img class="img-blo" src="imagen/gale3.jpg" alt="" /> 
                        </div> 
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Caja Tallada en Madera</h3>
                                <p>
                                Una caja de madera con delicados grabados, hecha con técnicas de talla artesanal. Es perfecta para guardar joyas o pequeños objetos de valor y aporta un aire de sofisticación y tradición a cualquier espacio.
                                </p>

                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->


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
     <script>
        // Variables y configuración inicial
        let slideIndex = 0;
        const slides = document.querySelectorAll('.carousel-image');
        const totalSlides = slides.length;

        // Función para mover el carrusel
        function moveSlide(direction) {
            slideIndex = (slideIndex + direction + totalSlides) % totalSlides;
            document.querySelector('.carousel-slide').style.transform = `translateX(-${slideIndex * 100}%)`;
        }

        // Autoplay del carrusel
        setInterval(() => {
            moveSlide(1);
        }, 5000); // Cambio de imagen cada 5 segundos
    </script>
</body>

</html>
