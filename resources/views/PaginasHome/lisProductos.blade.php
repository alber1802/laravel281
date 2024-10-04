<html>
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

    </nav>

 <aside class="sidebar navbar-default" role="navigation">
 <div class="user-panel">
<!--<div class="pull-left image">
    <img src="imagen/user-removebg-preview.png" class="img-circle img-normal" alt="User Image" width="200" height="200" />
</div>-->
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
                <a href="{{ route('agregarProductos') }}"><i class="glyphicon glyphicon-chevron-right"></i> ADICIONAR PRODUCTOS</a>
            </li>
            <li>
                <a href="{{ route('lisProductos') }}"><i class="glyphicon glyphicon-chevron-right"></i> LISTA PRODUCTOS</a>
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
<table class="table table-striped table-bordered table-hover" id="dataTables-example" id="listaProductos" name="listaProd">
<thead>
    <tr>
       
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Stock</th>
        <th class="text-center">Producto</th>
        <th class="text-center">Categoria</th>
        <th class="text-center">Detalles</th>
    </tr>
</thead>
<tbody>
@if(!empty($datos) && count($datos) > 0)
    @foreach($datos as $item)
        <tr>
          
            <td class="text-center">{{ $item->nombreP }}</td>
            <td class="text-center">{{ $item->descripcionP }}</td>
            <td class="text-center">{{ $item->precioP }} Bs</td>
            <td class="text-center">{{ $item->stock }}</td>
            <td class="text-center">
            <img src="{{ url($item->imgP) }}" style="max-width: 100px; max-height: 100px;">

            </td>
          
            <td class="text-center">
    {{ $item->categoria ? $item->categoria->nombreCa : 'Sin categoría' }} 
</td>

            <th class="text-center">
<a href="{{route('productos.editar', $item->id_producto)}}" class="btn btn-success"><i class='fa fa-edit'></i> Editar</a>
    <a class='btn btn-danger' data-toggle='modal' data-target='#mimodalejemplo2'>
        <i class='fa fa-trash-o'></i> Eliminar</a>
<div class='modal fade' id='mimodalejemplo2' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
    <div class='modal-dialog' role='document'>
         <div class='modal-content'>
            <div class='modal-body'>
                 <h5>Esta seguro de eliminar el registro?<br>{{$item->nombreP}}</h5>
                </div>
             <div class='modal-footer'>
                 <center>   
                 <form action="{{ route('EliminarProducto', $item->id_producto) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="" class="btn btn-success"><span class='glyphicon glyphicon-ok'> eliminar</a>
                </form>

                </center>
            </div>
        </div>
     </div>
</div>


            <a href="#" class="btn btn-primary">Detalles</a>
            </th>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="5" class="text-center">No hay productos disponibles</td>
    </tr>
@endif

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