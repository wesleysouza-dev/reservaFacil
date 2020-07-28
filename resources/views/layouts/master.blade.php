<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('master.name', 'Sistema de Reserva de Salas') }}</title>

 
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/toastr/build/toastr.min.css') }}">

    <!-- style personalize -->
    <style>
        .navbar-brand-box img{
            max-width: 60%;
        }

        .avatar-title { background: transparent!important;}
        .color-red{ color: red;}
        .custom-file-input:lang(en)~.custom-file-label::after{ content:"Buscar"}
        .text-white{ color: #fff!important;}
        .spinner-btn { width: 13px; height: 13px;}
    </style>
    @stack('styles')

  
</head>
<body class="{{ Route::currentRouteName() }}" data-sidebar="dark">
    
    @include('layouts.header')
    @include('layouts.nav')


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

    
                @yield('content')

            </div>
    <!-- container-fluid -->
        </div>
    <!-- End Page-content -->

    
    <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Nome do Sistema.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right d-none d-sm-block">
                   Desenvolvido por <a href="https://wesleydesign.com.br" target="_blank">Wesley Souza</a>
                </div>
            </div>
        </div>
    </div>
    </footer>
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- form fake logout -->
    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <!-- JAVASCRIPT -->

    <script>
      const id_user = '{{Auth::user()->id}}'
    </script>

    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts -->
    {{-- <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}

    {{-- <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script> --}}

    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <!-- toastr plugin -->
    <script src="{{ asset('assets/libs/toastr/build/toastr.min.js') }}"></script>

    <!-- toastr init -->
    <script src="{{ asset('assets/js/pages/toastr.init.js') }}"></script>

    <!--Custom scripts-->
    @stack('scripts')
    
    
    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- Functions js -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>




</body>
</html>
