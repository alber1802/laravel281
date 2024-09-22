<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshcomercio - Ecommerce Bootstrap 4 HTML Template</title>
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

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.html">INICIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">NOSOTROS</a></li>
                          <li class="nav-item"><a class="nav-link" href="comercio.html">PRODUCTOS</a></li>

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
 
    <div class="comercio-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 comercio-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Ordenar por</span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Ninguno</option>
									<option value="1">Populares</option>
									<option value="2">Precio alto → Precio alto</option>
									<option value="3">Precio bajo → Precio alto</option>
									<option value="4">Mejor vendido</option>
								</select>
                                </div>
                                <p>Mostrando los 4 resultados</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">En venta</p>
                                                    </div>
                                                    <img src="imagen/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="comercio-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Añadir al carrito</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Cenicero cerámica gres grande</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">Nuevo</p>
                                                    </div>
                                                    <img src="imagen/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="comercio-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Añadir al carrito</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                     <h4> Alcancias de Yeso</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">En venta</p>
                                                    </div>
                                                    <img src="imagen/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="comercio-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Añadir al carrito</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                     <h4>Antiguo Torito de Pucara Cerámica Popular Peruana Figura Toro Ceremonial</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">Nuevo</p>
                                                    </div>
                                                    <img src="imagen/p1.webp" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="comercio-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Añadir al carrito</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Gallina Josefina</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">En venta</p>
                                                    </div>
                                                    <img src="imagen/p2.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="comercio-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Añadir al carrito</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Individual Cay</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">En venta</p>
                                                    </div>
                                                    <img src="imagen/p3.webp" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="comercio-detail.html" data-toggle="tooltip" data-placement="right" title="ver"><i class="fas fa-eye"></i></a></li>
                                                
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Añadir al Carrito</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Fuente Limarí</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">En venta</p>
                                                    </div>
                                                    <img src="imagen/p4.webp" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="comercio-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                            
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Añadir al carrito</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Aguayo Andino</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="imagen/p5.webp" class="img-fluid" alt="Image">
                                                   <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="comercio-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                            
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Añadir al carrito</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Cesta Chelín</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">Nuevo</p>
                                                    </div>
                                                    <img src="imagen/p6.webp" class="img-fluid" alt="Image">
                                                   <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="comercio-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                            
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Añadir al carrito</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Pantalla Chilco</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="new">Nuevo</p>
                                                        </div>
                                                        <img src="imagen/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                       <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="comercio-detail.html" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                            
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a la lista de deseos"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Añadir al Carrito</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Añadir al Carrito</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <img src="imagen/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Añadir al Carrito</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <img src="imagen/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Añadir al Carrito</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-comercio-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Busca aquí..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categorias</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Decoracion para tu hogar<small class="text-muted">(100)</small>
								</a>
                                    <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">Cesta Silvestre <small class="text-muted">(50)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Vanasto Centollero  <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Canasto Tudor <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Cojin tranca <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Fuente Limari <small class="text-muted">(20)</small></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Cocina
								<small class="text-muted">(50)</small>
								</a>
                                    <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">Gallina josefina <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Individual Cay <small class="text-muted">(20)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Panero Ovalo 3 <small class="text-muted">(20)</small></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="list-group-item list-group-item-action"> Mujer  <small class="text-muted">(150) </small></a>
                                <a href="#" class="list-group-item list-group-item-action"> Hombre <small class="text-muted">(11)</small></a>
                                <a href="#" class="list-group-item list-group-item-action"> Niños <small class="text-muted">(22)</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End comercio Page -->

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
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">Thewaycomercio</a> Design By :
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
