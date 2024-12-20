<!DOCTYPE html>
<html lang="en">
<!-- Basi -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Commcraft - Catalogo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('imagen/logo.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('imagen/logo.png') }}">
     <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('css/pages/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/catalogo.css') }}">

    <link rel="stylesheet" href="{{ asset('css/pages/botones.css') }}">
      <!-- importacion de script -->
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

     <!--para el mensaje-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


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
                          <li><a href="{{route('PerfilUsuario')}}"><i class="fa fa-user s_color"></i> MY CUENTA</a></li>
                            <li><a href="{{route('contactanos')}}"><i class="fas fa-location-arrow"></i> DONDE ESTAMOS</a></li>
                            <li><a href="{{route('nosotros')}}"><i class="fas fa-headset"></i> CONTACTANOS</a></li>
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
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('imagen/logo.png') }}" class="logo" alt=""></a>
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
                    <h2>CATALOGO</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">TIENDA</a></li>
                        <li class="breadcrumb-item active">CATALOGO</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

<!-- Start CATALOGO-->
<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">NUESTROS PRODUCTOS</h1>
            </div>
            <!--busqueda-->
            <div class="col-md-12">
                <div class="search-container">
                    <input type="text" id="search-input" placeholder="Buscar productos..." />
                    <button id="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-12">
                        <!-- Filtro de precio y categoría -->
                        <div class="filter-container">
                            <div class="price-filter">
                                <input type="number" id="min-price" placeholder="Precio Mínimo" />
                                <input type="number" id="max-price" placeholder="Precio Máximo" />
                                <button id="filter-button">Filtrar</button>
                            </div>
                            <div class="category-filter">
                                <select id="category-select">
                                    <option value="">Seleccionar Categoría</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->nombreCa }}">{{ $categoria->nombreCa }}</option>
                                    @endforeach
                                </select>
                                <button id="category-filter-button">Filtrar por Categoría</button>
                            </div>
                        </div>
            </div>
        </div>
        <div class="row">
            @foreach($productos as $item)
            <div class="col-md-3 mb-4">
                <div class="product-card" data-precio="{{ $item->precioP }}" data-categoria="{{ $item->categoria->nombreCa }}">
                    <div class="product-card-img">
                        @if ($item->stock > 0)
                        <label class="stock bg-success">En Stock</label>
                        @else
                        <label class="out-of-stock">Agotado</label>
                        @endif
                        <img src="{{url($item->imgP) }}" alt=" " class="img-fluid">
                    </div>
                    <div class="product-card-body">
                        <p class="product-categoria">{{$item->categoria->nombreCa}}</p>
                        <h5 class="product-name">
                            <a href="">
                                {{$item->nombreP}}
                            </a>
                        </h5>
                        <div>
                            @if ($item->descuentoP > 0)
                            <span class="selling-price">{{ number_format($item->precioP - $item->descuentoP, 0) }} Bs.</span>
                            <span class="original-price">{{ number_format($item->precioP, 0) }} Bs.</span>
                            @else
                            <span class="selling-price">{{ number_format($item->precioP, 0) }} Bs.</span>
                            @endif
                            </div>
                        <div class="mt-2">
                            <form action="{{ route('agregar.producto') }}" method="POST" style="display: inline;">
                                @csrf
                                <input type="hidden" name="id_producto" value="{{ $item->id_producto }}">
                                <button type="submit" class="btn btn1">
                                    <i class="fa fa-shopping-cart"></i> Añadir a carrito
                                </button>
                            </form>
                            <a href="{{route('Ver.Detalle.Producto', ['id' => $item->id_producto])}} " class="btn btn1">Ver</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12 mt-4 text-center">
                <p class="lead">¡Revise su carrito de compras!</p> 
                <a href="{{route('carrito.mostrar')}}" class="btn btn-carrito">Ver carrito</a> <!-- Botón de Ir al Carrito -->
            </div>
        </div>

    </div>
</div>

    <!-- End ctalogo-->

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
								<li>Monday - Friday: 08.00am a 05.00pm</li> <li>Saturday: 10.00am a 08.00pm</li> <li>Sunday: <span>Closed</span></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

     <!--importe -->

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <!--para el mensaje-->

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

        @if(session('error_agregar'))
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
                "timeOut": "5000", // Tiempo en milisegundos
            };
            toastr.error("{{ session('error_agregar') }}", 'Error!');
        @endif
    });

    // Filtrar por precio
document.getElementById('filter-button').addEventListener('click', function() {
    const minPrice = parseFloat(document.getElementById('min-price').value) || 0;
    const maxPrice = parseFloat(document.getElementById('max-price').value) || Infinity;
    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach(card => {
        const price = parseFloat(card.getAttribute('data-precio'));
        const parentCol = card.closest('.col-md-3');
        if (price >= minPrice && price <= maxPrice) {
            parentCol.style.display = ''; // Muestra la columna
        } else {
            parentCol.style.display = 'none'; // Oculta la columna
        }
    });
});

// Filtrar por categoría
document.getElementById('category-filter-button').addEventListener('click', function() {
    const category = document.getElementById('category-select').value;
    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach(card => {
        const productCategory = card.getAttribute('data-categoria');
        const parentCol = card.closest('.col-md-3');
        if (category === "" || productCategory === category) {
            parentCol.style.display = ''; // Muestra la columna
        } else {
            parentCol.style.display = 'none'; // Oculta la columna
        }
    });
});

// Búsqueda por nombre de producto
document.getElementById('search-button').addEventListener('click', function() {
    const searchInput = document.getElementById('search-input').value.toLowerCase();
    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach(card => {
        const productName = card.querySelector('.product-name a').textContent.toLowerCase();
        const parentCol = card.closest('.col-md-3');
        if (productName.includes(searchInput)) {
            parentCol.style.display = ''; // Muestra la columna
        } else {
            parentCol.style.display = 'none'; // Oculta la columna
        }
    });
});
</script>


</body>

</html>
