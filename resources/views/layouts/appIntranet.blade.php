<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fuentes -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('libs/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">    
   
    <!-- Estilos -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/css/homeIntranet.css') }}" rel="stylesheet">

</head>

<body id="page-top">
    <div id="app" class="container">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-verdeIntranet topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 ml-3">
                <i class="fa fa-bars"></i>
            </button>                        

            <!-- Topbar Navbar -->

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">                
                <div class="logoCIJ ml-3"><img src="{{ asset('imgs/homeIntranet/Logo.jpg') }}"></div>
                <div class="tituloCIJ ml-3 d-none d-sm-inline">Centros de<br />Integración<br />Juvenil, A. C.</div>                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav me-auto">   
                <li>                
                    <span class="tituloIntranet mr-2 d-none d-md-inline">INTRANET</span>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">     

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline small">{{ Auth::user()->name }}</span>
                        <i class="fas fa-fw fa-user-circle"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            {{ __('Cerrar Sesión') }}
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->   

        <!-- Page Wrapper -->
        <main id="wrapper">

            @include('layouts.appIntranet.sidebar')

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    @include('layouts.appIntranet.content')

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </main>
        <!-- End of Page Wrapper -->       

        @include('layouts.appIntranet.footer')

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>        

    </div>  

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>                           
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Complemento JavaScript-->
    <script src="{{ asset('libs/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Scripts personalizados para todas las páginas -->
    <script src="{{ asset('libs/js/sb-admin-2.min.js') }}"></script>

</body>
</html>