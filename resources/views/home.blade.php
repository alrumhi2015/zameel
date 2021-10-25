@extends('layouts.app')



<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



         <!-- Google Font: Source Sans Pro -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
         <!-- Font Awesome Icons -->
         <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
         <!-- IonIcons -->
         <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
         <!-- Theme style -->
         <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>




<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        {{-- Start NavBar --}}


        @include('layouts.navbar')

        {{-- End NavBar --}}


        {{-- Start SideBar --}}

        @include('layouts.sidebar')
        {{-- End SideBar --}}



          <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    @yield('content')
    
  </div>
  <!-- /.content-wrapper -->

  

    {{-- Start control --}}

    @include('layouts.control')
    {{-- End control --}}
        




</div> 






<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('vendors/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('vendors/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('vendors/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('vendors/dist/js/pages/dashboard3.js') }}"></script>
</body>
</html>

