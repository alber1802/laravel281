<!DOCTYPE html>
<html lang="en">

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

        <title>Startmin - Bootstrap Admin Theme</title>

        <link rel="stylesheet" href="{{ asset('css/productos/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/productos/css/metisMenu.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/productos/css/startmin.css') }}">

        <link rel="stylesheet" href="{{ asset('css/productos/css/font-awesome.min.css') }}" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

   
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">COMMCRAFT</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> INICIO</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> Nuevos Comentarios
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Usuario <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i> Configuracion</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
            </nav>

    <aside class="sidebar navbar-default" role="navigation">
    <div class="user-panel">
        <div class="pull-left image">
            <img src="imagen/img-3.jpg" class="img-circle img-normal" alt="User Image" width="200" height="200" />
        </div>
    </div>

    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="index.html"><span class="glyphicon glyphicon-home"></span>
                <strong>PRINCIPAL</strong></a>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i><strong> PRODUCTOS</strong><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> ADICIONAR PRODUCTOS</a>
                    </li>
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> LISTA PRODUCTOS</a>
                    </li>
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> DETALLES PRODUCTOS</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-users fa-fw"></i> <strong>ARTESANOS</strong></a>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-user"></i> <strong> CLIENTES</strong><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> ADICIONAR CLIENTES</a>
                    </li>
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> LISTA CLIENTES</a>
                    </li>
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> DETALLES CLIENTES</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-lock"></i><strong> PEDIDOS</strong><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> ADICIONAR CLIENTES</a>
                    </li>
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> LISTA CLIENTES</a>
                    </li>
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> DETALLES CLIENTES</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-th-list"></i><strong> CATEGORIAS</strong><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> ADICIONAR CATEGORIA</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-file"></i> <strong> REPORTES</strong><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> REPORTE</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <strong>USUARIOS</strong><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> ADICIONAR USUARIOS</a>
                    </li>
                    <li>
                        <a href="panels-wells.html"><i class="glyphicon glyphicon-chevron-right"></i> LISTA USUARIOS</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</aside>

            <!-- /.sidebar -->

           <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Título con icono de producto -->
                <h1 class="page-header">
                  <span class=" glyphicon glyphicon-shopping-cart"></span>  <i class="fas fa-box"></i> PRODUCTO
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                <!-- Panel con estilo elegante -->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <strong>ADICIONAR NUEVO PRODUCTO</strong>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="codigo">Código</label>
                                        <input type="text" class="form-control" id="codigo" placeholder="Ingrese el código del producto">
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del producto">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripción del Producto</label>
                                        <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese la descripción del producto"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="material">Material</label>
                                        <input type="text" class="form-control" id="material" placeholder="Ingrese el material del producto">
                                    </div>
                                    <div class="form-group">
                                        <label for="precio">Precio</label>
                                        <input type="number" class="form-control" id="precio" placeholder="Ingrese el precio del producto">
                                    </div>
                                    <div class="form-group">
                                        <label for="stock">Stock</label>
                                        <input type="number" class="form-control" id="stock" placeholder="Ingrese la cantidad de stock disponible">
                                    </div>
                                    <div class="form-group">
                                        <label for="color">Color</label>
                                        <input type="text" class="form-control" id="color" placeholder="Ingrese el color del producto">
                                    </div>
                                    <div class="form-group">
                                        <label for="tipo">Tipo</label>
                                        <input type="text" class="form-control" id="tipo" placeholder="Ingrese el tipo de producto">
                                    </div>
                                    <div class="form-group">
                                        <label for="categoria">Categoría</label>
                                        <select class="form-control" id="categoria">
                                            <option value="">Seleccione una categoría</option>
                                            <option value="ropa">Ropa</option>
                                            <option value="accesorios">Accesorios</option>
                                            <option value="decoracion">Decoración</option>
                                            <option value="juguetes">Juguetes</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="imagen">Imagen del producto</label>
                                        <input type="file" class="form-control-file" id="imagen">
                                    </div>

                                    <!-- Botones con estilos -->
                                    <button type="submit" class="btn btn-primary">
                                           <span class="glyphicon 
                                            glyphicon-floppy-open"></span> Adicionar
                                    </button>
                                   <button type="reset" class="btn btn-danger">
    <span class="glyphicon glyphicon-floppy-remove"></span> Cancelar
</button>
                                </form>
                            </div>
                            <!-- /.col-lg-12 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

            <!-- /#page-wrapper -->

        </div>

        <script src="{{asset('js/productos/js/jquery.min.js') }}"></script>

        <script src="{{asset('js/productos/js/bootstrap.min.js') }}"></script>
        
        <script src="{{asset('js/productos/js/metisMenu.min.js') }}"></script>
        
        <script src="{{asset('js/productos/js/startmin.js') }}"></script>
     

    </body>

</html>
