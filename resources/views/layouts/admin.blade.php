<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <!-- Fonts -->
     <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

     <!-- Styles -->
     <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"-->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Styles -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Styles -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Glezz y Pedro">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema Hotel </title>


    <!-- Favicon icono del la pestaña de la pagina-->
    <link href="{{ asset('img/iniciar.png') }}" rel="icon" type="image/png">
    @yield('estilos')
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand MENU LATERAL-->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Control Interno de Hotel </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Nav::isRoute('home') }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Opciones') }}
        </div>

        <!-- Nav Item - Perfil -->
        <li class="nav-item {{ Nav::isRoute('profile') }}">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Perfil') }}</span>
            </a>
        </li>

        <!-- Nav Item - CLIENTES -->
          <!-- Lista dentro de otra lista  -->
        <li class="nav-item {{ Nav::isRoute('cliente.create') }}">
            <!-- Item Principal -->
            <a class="nav-link" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Clientes') }}</span>
            </a>
                                     <!-- Hace referencia al href -->
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li class="nav-item {{ Nav::isRoute('cliente.create') }}">
                        <a class="nav-link" href="{{ route('cliente.create') }}">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ __('Nuevo Cliente') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('cliente.index') }}">
                        <a class="nav-link" href="{{ route('cliente.index') }}">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ __('Ver Clientes') }}</span>
                        </a>
                    </li>

                </ul>
        </li>


        <!-- Nav Item - RESERVACIONES-->
          <!-- Lista dentro de otra lista  -->
          <li class="nav-item {{ Nav::isRoute('reservacion.create') }}">
            <!-- Item Principal -->
            <a class="nav-link" href="#pageSubmenuRes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Reservaciones') }}</span>
            </a>
                                     <!-- Hace referencia al href -->
                <ul class="collapse list-unstyled" id="pageSubmenuRes">
                    <li class="nav-item {{ Nav::isRoute('reservacion.create') }}">
                        <a class="nav-link" href="{{ route('reservacion.create') }}">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ __('Nueva Reservacion') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('reservacion.index') }}">
                        <a class="nav-link" href="{{ route('reservacion.index') }}">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ __('Consultar') }}</span>
                        </a>
                    </li>

                </ul>
            </li>



        <!-- Nav Item - Servicios-->
          <!-- Lista dentro de otra lista  -->
          <li class="nav-item {{ Nav::isRoute('servicio.create') }}">
            <!-- Item Principal -->
            <a class="nav-link" href="#pageSubmenuH" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Servicios') }}</span>
            </a>
                                     <!-- Hace referencia al href -->
                <ul class="collapse list-unstyled" id="pageSubmenuH">
                    <li class="nav-item {{ Nav::isRoute('servicio.create') }}">
                        <a class="nav-link" href="{{ route('servicio.create') }}">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ __('Registrar Servicios') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('servicio.index') }}">
                        <a class="nav-link" href="{{ route('servicio.index') }}">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ __('Ver Servicios') }}</span>
                        </a>
                    </li>
                </ul>
             </li>

             <!-- Nav Item - HABITACION-->
          <!-- Lista dentro de otra lista  -->
          <li class="nav-item {{ Nav::isRoute('habitacion.create') }}">
            <!-- Item Principal -->
            <a class="nav-link" href="#pageSubmenuHa" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Habitaciones') }}</span>
            </a>
                                     <!-- Hace referencia al href -->
                <ul class="collapse list-unstyled" id="pageSubmenuHa">
                    <li class="nav-item {{ Nav::isRoute('habitacion.create') }}">
                        <a class="nav-link" href="{{ route('habitacion.create') }}">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ __('Registrar Habitacion') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('habitacion.index') }}">
                        <a class="nav-link" href="{{ route('habitacion.index') }}">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ __('Lista de Habitaciones') }}</span>
                        </a>
                    </li>
                </ul>
             </li>

         <!-- Nav Item - Reportes-->
          <!-- Lista dentro de otra lista  -->
          <li class="nav-item {{ Nav::isRoute('cliente.reporte') }}">
            <!-- Item Principal -->
            <a class="nav-link" href="#pageSubmenuRe" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Reportes') }}</span>
            </a>
                                     <!-- Hace referencia al href -->
                <ul class="collapse list-unstyled" id="pageSubmenuRe">
                    <li class="nav-item {{ Nav::isRoute('cliente.reporte') }}">
                        <a class="nav-link" href="{{ route('cliente.reporte') }}">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ __('Reporte de Clientes') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Nav::isRoute('reservacion.reporte') }}">
                        <a class="nav-link" href="{{ route('reservacion.reporte') }}">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ __('Reporte Reservaciones') }}</span>
                        </a>
                    </li>
                </ul>
             </li>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>



                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>




                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->user }}</span>
                            <img class="img-profile rounded-circle" src="../img/perfil.png">
                        </a>

                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Perfil') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Cerrar Sesion') }}
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content contenido lateral-->
            <div class="container-fluid">
                <!-- Reservar espacio para solo indicarlo en otro archivo-->
                <!-- Al editar cambios solo se hace aqui-->
                @yield('main-content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('¿Listo para salir?') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Cerrar sesión" si está listo para finalizar su sesión actual.</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancelar') }}</button>
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar Sesión') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
@yield('javascript_extra')
</body>
</html>
