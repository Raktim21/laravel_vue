<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="https://florence-admin-template.multipurposethemes.com/bs5/images/favicon.ico">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Vendors Style-->
        <link rel="stylesheet" href="{{ asset('dashboard/css/vendors_css.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/font-awesome/css/font-awesome.min.css') }}">
          
        <!-- Style-->  
        <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/skin_color.css') }}">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

        <div class="wrapper" id="app">
        <div id="loader"></div>
                
            @include('layouts.header')
            

            @include('layouts.nav')
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                &copy; {{ date('Y') }} <a href="https://www.selopia.com/">Selopia</a>. All Rights Reserved.
            </footer>

            
            <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
          
        </div>



        <script src="{{ asset('dashboard/js/vendors.min.js')}}"></script>
        <script src="{{ asset('dashboard/js/pages/chat-popup.js')}}"></script>
        <script src="{{ asset('dashboard/assets/icons/feather-icons/feather.min.js')}}"></script>
        
        <script src="{{ asset('dashboard/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
        <script src="{{ asset('dashboard/assets/vendor_components/progressbar.js-master/dist/progressbar.js')}}"></script>
        
        <!-- Florence Admin App -->
        <script src="{{ asset('dashboard/js/template.js')}}"></script>
        <script src="{{ asset('dashboard/js/pages/dashboard.js')}}"></script>

    </body>
</html>
