<!DOCTYPE html>
<html lang="es">
<head>
	<title>Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/Administrador/main.css')}}">
	<link rel="shortcut icon" href="{{asset('imagen/logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('imagen/logo.png')}}">


    	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="{{ asset('css/productosv2/css/bootstrap.min.css') }}" >

    <!-- Sweet Alert V8.13.0 JS file-->
	<script src="{{ asset('js/productosv2/js/sweetalert2.min.js')}}" ></script>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style>
        .icon-md {
            font-size: 24px; /* Define el tamaño que consideres "mediano" */
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px; /* Ancho del contenedor */
            height: 50px; /* Alto del contenedor */
            border-radius: 10px; /* Bordes redondeados */
            background: linear-gradient(to bottom right, #343a40, #495057); /* Fondo con gradiente oscuro */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Sombra */
            color: white; /* Color del ícono */
        }
        .fa, .fas {
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }
        .text-center {
            text-align: center !important;
        }

    </style>
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				company <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="{{ asset('imagen/logo.png') }}" alt="UserIcon">
					<figcaption class="text-center text-titles">COMMCRAFT </figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="{{ route('dashboard') }}">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administracion  <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="{{ route('NuevaCategoria') }}"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Categoria</a>
						</li>
						<li>
							<a href="{{ route('NuevaComunidad') }}"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Comunidad</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Crear Usuario <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="{{ route('NuevoCliente') }}">
								<i class="zmdi zmdi-account zmdi-hc-fw"></i> Cliente
							</a>
							<!--<a href="#"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Clientes</a>-->
						</li>
						<li>
							<a href="{{ route('NuevoArtesano') }}">
								<i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Artesano
							</a>
							<!--<a href="#"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Artesano</a>-->
						</li>
						<li>
						<a href="{{ route('NuevoRepartidor') }}">
							<i class="zmdi zmdi-face zmdi-hc-fw"></i> Repartidor
						</a>
							<!--<a href="#"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Repartido</a>-->
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Ver Datos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="{{route('Administrador.listar')}}"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Datos de Sistema </a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Systema <small>Administrativo Dashboard</small></h1>
			</div>
            <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- End Navbar -->
    <div class="container-fluid py-2">
    <div class="row">

    <div class="col-xl-4 col-sm-6">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Ingresos  diarios {{ $datos2 }} Bs </p>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Ingresos semanales {{ $datos }} Bs </p>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"> Ingresos mensuales {{ $datos3 }} Bs </p>
                </div>
                <div class="icon icon-md text-center">
                <i class="fas fa-dollar-sign  fa-fw"></i>
    			      </div>
              </div>
            </div>
          </div>
        </div>
    <div class="col-xl-4 col-sm-6">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                    @foreach($pedidos as $item)
                      <i class="material-symbols-rounded text-info text-gradient">Pedidos en {{$item->estadoP}}</i> - <i class="material-symbols-rounded text-success text-gradient"> {{$item->total}}</i><br>
                    @endforeach
                </div>
                <div class="icon icon-md text-center">
                <i class="fas fa-truck fa-fw"></i>
    			      </div>
              </div>
            </div>
          </div>
        </div>
      <div class="col-xl-4 col-sm-6">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                    @foreach($pedidos as $item)
                      <i class="material-symbols-rounded text-info text-gradient">Productos {{$item->estadoP}}</i> - <i class="material-symbols-rounded text-success text-gradient"> {{$item->total}}</i><br>
                    @endforeach
                </div>
                <div class="icon icon-md text-center">
                <i class="fas fa-shopping-cart fa-fw"></i> 
    			      </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-0 ">Vistas del sitio web
              </h6>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Ventas Diarias</h6>
              <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) de aumento en las ventas de hoy.  </p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-0 ">Tareas completadas
             </h6>
              <p class="text-sm "> Rendimiento de la última campaña</p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Productos</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">3 productos</span> mas vendidos
                  </p>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">producto</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">precio unitario</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">cantidad pedida</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ingreso generado</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(!empty($productos) && count($productos) > 0)
                    @foreach($productos as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $item->nombreP }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                          <img src="{{ url($item->imgP) }}" alt="team1" style="width: 50px; height: 50px;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="{{ url($item->imgP2) }}" alt="team2" style="width: 50px; height: 50px;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                            <img src="{{ url($item->imgP3) }}"  alt="team3" style="width: 50px; height: 50px;">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                         {{$item->precioP}} 
                      </td>
                      <td class="align-middle text-center text-sm">
                          {{$item->totalVentas}}                  
      </td>
                    <td class="align-middle text-center text-sm">
                          {{$item->totalgenerado}} Bs  </td>            
                    </tr>
                    @endforeach
                    @else
                    <tr>
                      <td colspan="8" class="text-center">No hay productos disponibles</td>
                    </tr>
                      @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Estado del inventario</h6>

              <p class="text-sm">
                    @foreach($stock as $item)
                      <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                      <span class="font-weight-bold">Productos en Stock </span>{{$item->productosEnStock}} <br>
                      <i class="fa fa-arrow-down text-danger" aria-hidden="true"></i>

                      <span class="font-weight-bold">Productos Agotados </span>{{$item->productosAgotados}} 
                    
                
              </p>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-symbols-rounded text-success text-gradient">notificationes</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Productos en stock por debajo de un <br>nivel mínimo definido </h6>{{$item->productosCasiAgotados}} 
                    @endforeach
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{date("Y-m-d")}}</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-symbols-rounded text-danger text-gradient">code</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="col-lg-4 col-md-6 mt-4 mb-4">
    <div class="card ">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Actividades Recientes <small>Sesiones</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">
                                <ul class="list-unstyled timeline widget">
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>¿Quién necesita Sundance cuando tienes crowdfunding?</a>
                                                </h2>
                                                <div class="byline">
                                                    <span>Hace 13 horas</span> por <a>Jane Smith</a>
                                                </div>
                                                <p class="excerpt">Los festivales de cine solían ser momentos de vida o muerte para los cineastas. Eran donde conocías a los productores que podían financiar tu proyecto, y si a los compradores les gustaba tu película, pagarían para adelantar y… <a>Leer&nbsp;Más</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>¿Quién necesita Sundance cuando tienes crowdfunding?</a>
                                                </h2>
                                                <div class="byline">
                                                    <span>Hace 13 horas</span> por <a>Jane Smith</a>
                                                </div>
                                                <p class="excerpt">Los festivales de cine solían ser momentos de vida o muerte para los cineastas. Eran donde conocías a los productores que podían financiar tu proyecto, y si a los compradores les gustaba tu película, pagarían para adelantar y… <a>Leer&nbsp;Más</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>¿Quién necesita Sundance cuando tienes crowdfunding?</a>
                                                </h2>
                                                <div class="byline">
                                                    <span>Hace 13 horas</span> por <a>Jane Smith</a>
                                                </div>
                                                <p class="excerpt">Los festivales de cine solían ser momentos de vida o muerte para los cineastas. Eran donde conocías a los productores que podían financiar tu proyecto, y si a los compradores les gustaba tu película, pagarían para adelantar y… <a>Leer&nbsp;Más</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>¿Quién necesita Sundance cuando tienes crowdfunding?</a>
                                                </h2>
                                                <div class="byline">
                                                    <span>Hace 13 horas</span> por <a>Jane Smith</a>
                                                </div>
                                                <p class="excerpt">Los festivales de cine solían ser momentos de vida o muerte para los cineastas. Eran donde conocías a los productores que podían financiar tu proyecto, y si a los compradores les gustaba tu película, pagarían para adelantar y… <a>Leer&nbsp;Más</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


     
             
          </div>

      </div>

    </div>
  </main>

		</div>
		
		
	</section>

	
	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Ayuda</h4>
			    </div>
			    <div class="modal-body">
			        <p>
                    La administración del sistema organiza y controla, optimizando la experiencia de compra para el cliente.
                 </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="{{asset('js/Administrador/js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/sweetalert2.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/material.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/ripples.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('js/Administrador/js/main.js')}}"></script>
	<script>
		$.material.init();
	</script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    
    <script>
            var ctx = document.getElementById("chart-bars").getContext("2d");

            new Chart(ctx, {
            type: "bar",
            data: {
            labels: ["M", "T", "W", "T", "F", "S", "S"],
            datasets: [{
                label: "Views",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: false,
                backgroundColor: "#43A047",
                data: [50, 45, 22, 28, 50, 60, 76],
                barThickness: 'flex'
            }, ],
            },
            options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5],
                    color: '#e5e5e5'
                },
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 500,
                    beginAtZero: true,
                    padding: 10,
                    font: {
                    size: 14,
                    lineHeight: 2
                    },
                    color: "#737373"
                },
                },
                x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    color: '#737373',
                    padding: 10,
                    font: {
                    size: 14,
                    lineHeight: 2
                    },
                }
                },
            },
            },
            });


            var ctx2 = document.getElementById("chart-line").getContext("2d");

            new Chart(ctx2, {
            type: "line",
            data: {
            labels: ["J", "F", "M", "A", "M", "J", "J", "A", "S", "O", "N", "D"],
            datasets: [{
                label: "Sales",
                tension: 0,
                borderWidth: 2,
                pointRadius: 3,
                pointBackgroundColor: "#43A047",
                pointBorderColor: "transparent",
                borderColor: "#43A047",
                backgroundColor: "transparent",
                fill: true,
                data: [120, 230, 130, 440, 250, 360, 270, 180, 90, 300, 310, 220],
                maxBarThickness: 6

            }],
            },
            options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                display: false,
                },
                tooltip: {
                callbacks: {
                    title: function(context) {
                    const fullMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                    return fullMonths[context[0].dataIndex];
                    }
                }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [4, 4],
                    color: '#e5e5e5'
                },
                ticks: {
                    display: true,
                    color: '#737373',
                    padding: 10,
                    font: {
                    size: 12,
                    lineHeight: 2
                    },
                }
                },
                x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    color: '#737373',
                    padding: 10,
                    font: {
                    size: 12,
                    lineHeight: 2
                    },
                }
                },
            },
            },
            });

            var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

            new Chart(ctx3, {
            type: "line",
            data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Tasks",
                tension: 0,
                borderWidth: 2,
                pointRadius: 3,
                pointBackgroundColor: "#43A047",
                pointBorderColor: "transparent",
                borderColor: "#43A047",
                backgroundColor: "transparent",
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            }],
            },
            options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [4, 4],
                    color: '#e5e5e5'
                },
                ticks: {
                    display: true,
                    padding: 10,
                    color: '#737373',
                    font: {
                    size: 14,
                    lineHeight: 2
                    },
                }
                },
                x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [4, 4]
                },
                ticks: {
                    display: true,
                    color: '#737373',
                    padding: 10,
                    font: {
                    size: 14,
                    lineHeight: 2
                    },
                }
                },
            },
            },
            });
    </script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
    damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
 <script src="{{asset('js/productosv2/js/jquery-3.4.1.min.js') }}" ></script>



</body>
</html>