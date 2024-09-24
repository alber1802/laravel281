<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <link rel="stylesheet" href="{{ asset('css/productos/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/productos/css/metisMenu.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/productos/css/dataTables/dataTables.bootstrap.css') }}">

        <link rel="stylesheet" href="{{ asset('css/productos/css/dataTables/dataTables.responsive.css') }}">

        <link rel="stylesheet" href="{{ asset('css/productos/css/startmin.css') }}">

        <link rel="stylesheet" href="{{ asset('css/productos/css/font-awesome.min.css') }}" type="text/css">

    </head>

    <body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="">COMMCRAFT</a>
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
                        <a href=""><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->
    </nav>

 <aside class="sidebar navbar-default" role="navigation">
<div class="user-panel">
<div class="pull-left image">
    <img src="imagen/img-2.jpg" class="img-circle img-normal" alt="User Image" width="200" height="200" />
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
          <span class=" glyphicon glyphicon-shopping-cart"></span>  <i class="fas fa-box"></i> LISTA DE PRODUCTOS
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <!-- Panel con estilo elegante -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <strong>LISTA DE PRODUCTOS</strong>
            </div>
            <div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th class="text-center">Código</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Stock</th>
        <th class="text-center">Producto</th>
        <th class="text-center">Detalle</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td class="text-center">001</td>
        <td class="text-center">Collar de Plata</td>
        <td class="text-center">Collar hecho a mano con diseño tradicional de plata.</td>
        <td class="text-center">50.00</td>
        <td class="text-center">15</td>
        <td class="text-center">
            <img src="imagen/favicon.ico" alt="Collar de Plata" style="width: 100px; height: 100px">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">002</td>
        <td class="text-center">Bolso de Cuero</td>
        <td class="text-center">Bolso artesanal de cuero, ideal para uso diario.</td>
        <td class="text-center">120.00</td>
        <td class="text-center">8</td>
        <td class="text-center">
            <img src="imagen/p1.webp" alt="Bolso de Cuero" style="width: 100px; height: 100px">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">003</td>
        <td class="text-center">Taza de Cerámica</td>
        <td class="text-center">Taza pintada a mano con motivos indígenas.</td>
        <td class="text-center">25.00</td>
        <td class="text-center">30</td>
        <td class="text-center">
            <img src="imagen/p3.webp" alt="Taza de Cerámica" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">004</td>
        <td class="text-center">Alfombra de Lana</td>
        <td class="text-center">Alfombra tejida a mano con diseños geométricos andinos.</td>
        <td class="text-center">200.00</td>
        <td class="text-center">5</td>
        <td class="text-center">
            <img src="imagen/p2.jpg" alt="Alfombra de Lana" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">005</td>
        <td class="text-center">Bufanda de Alpaca</td>
        <td class="text-center">Bufanda hecha de lana de alpaca, suave y abrigadora.</td>
        <td class="text-center">60.00</td>
        <td class="text-center">20</td>
        <td class="text-center">
            <img src="imagen/p4.webp" alt="Bufanda de Alpaca" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">006</td>
        <td class="text-center">Jarrón de Cerámica</td>
        <td class="text-center">Jarrón decorativo hecho a mano.</td>
        <td class="text-center">45.00</td>
        <td class="text-center">10</td>
        <td class="text-center">
            <img src="imagen/p6.webp" alt="Jarrón de Cerámica" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">007</td>
        <td class="text-center">Sombrero de Paja</td>
        <td class="text-center">Sombrero hecho a mano, ideal para el verano.</td>
        <td class="text-center">25.00</td>
        <td class="text-center">25</td>
        <td class="text-center">
            <img src="imagen/p6.webp" alt="Sombrero de Paja" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">008</td>
        <td class="text-center">Aretes de Plata</td>
        <td class="text-center">Aretes hechos a mano con diseño único.</td>
        <td class="text-center">12.00</td>
        <td class="text-center">12</td>
        <td class="text-center">
            <img src="imagen/p7.webp" alt="Aretes de Plata" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">009</td>
        <td class="text-center">Cuaderno de Piel</td>
        <td class="text-center">Cuaderno encuadernado en piel, ideal para notas.</td>
        <td class="text-center">18.00</td>
        <td class="text-center">18</td>
        <td class="text-center">
            <img src="imagen/p8.webp" alt="Cuaderno de Piel" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">010</td>
        <td class="text-center">Set de Tazas</td>
        <td class="text-center">Set de tazas de cerámica pintadas a mano.</td>
        <td class="text-center">22.00</td>
        <td class="text-center">22</td>
        <td class="text-center">
            <img src="imagen/p5.webp" alt="Set de Tazas" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">011</td>
        <td class="text-center">Botella de Vidrio</td>
        <td class="text-center">Botella decorativa hecha a mano.</td>
        <td class="text-center">15.00</td>
        <td class="text-center">15</td>
        <td class="text-center">
            <img src="imagen/p9.webp" alt="Botella de Vidrio" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">012</td>
        <td class="text-center">Pañuelo de Seda</td>
        <td class="text-center">Pañuelo artesanal de seda, ideal para regalo.</td>
        <td class="text-center">30.00</td>
        <td class="text-center">30</td>
        <td class="text-center">
            <img src="imagen/p11.webp" alt="Pañuelo de Seda" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">013</td>
        <td class="text-center">Candelabro de Madera</td>
        <td class="text-center">Candelabro hecho a mano con madera reciclada.</td>
        <td class="text-center">35.00</td>
        <td class="text-center">5</td>
        <td class="text-center">
            <img src="imagen/p3.webp" alt="Candelabro de Madera" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">014</td>
        <td class="text-center">Portavelas de Cerámica</td>
        <td class="text-center">Portavelas decorativos de cerámica.</td>
        <td class="text-center">20.00</td>
        <td class="text-center">15</td>
        <td class="text-center">
            <img src="imagen/p4.webp" alt="Portavelas de Cerámica" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
    <tr>
        <td class="text-center">015</td>
        <td class="text-center">Cesta de Mimbre</td>
        <td class="text-center">Cesta hecha a mano de mimbre, ideal para decoraciones.</td>
        <td class="text-center">45.00</td>
        <td class="text-center">10</td>
        <td class="text-center">
            <img src="imagen/p7.webp" alt="Cesta de Mimbre" style="width: 100px; height: auto;">
        </td>
        <td class="text-center">
            <button class="btn btn-info">Ver Detalle</button>
        </td>
    </tr>
</tbody>
</table>
</div>

<!-- /.table-responsive -->
</div>

</div>
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
        <!-- jQuery -->
        <script src="{{asset('js/productos/js/jquery.min.js') }}"></script>

<script src="{{asset('js/productos/js/bootstrap.min.js') }}"></script>

<script src="{{asset('js/productos/js/metisMenu.min.js') }}"></script>

<script src="{{asset('js/productos/js/dataTables/jquery.dataTables.min.js') }}"></script>

<script src="{{asset('js/productos/js/dataTables/dataTables.bootstrap.min.js') }}"></script>

<script src="{{asset('js/productos/js/startmin.js') }}"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

    </body>

</html>