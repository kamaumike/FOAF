<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">        

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">        

        <title>Friends Of Allamano Foundation | @yield('title')</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">      

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">

        <!-- Custom CSS -->        
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}"> 

        <!-- Custom CSS for specific pages -->  
        @yield('custom-css') 

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>                       

    </head>
    <body data-spy="scroll">

        <!-- Navigation bar -->
        @include('layouts.nav')

        <!-- Display Content -->
        @yield('content')              

        <!-- Display footer -->
        

        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('assets/js/jqueryscroll.js') }}"></script>
        
        <!-- Custom Javascript for specific pages -->
        @yield('custom-js') 

    </body>
</html>