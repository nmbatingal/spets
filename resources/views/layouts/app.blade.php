<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Propeller Admin Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <title>Propeller Admin Dashboard</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/images/favicon.ico') }}">

    <!-- Google icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower/bootstrap-material-design-icons/css/material-icons.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/propeller.min.css') }}">

    @yield('styles')

    <!-- Propeller theme css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/css/propeller-theme.css') }}" />

    <!-- Propeller admin theme css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/css/propeller-admin.css') }}">

</head>

<body>
    <div id="app">

        <!-- Header Starts -->
        @include('layouts.header')
        <!-- Header Ends -->

        <!-- Sidebar Starts -->
        @include('layouts.sidebar')
        <!-- Sidebar Ends -->

        <!--content area start-->
        @yield('content')
        <!-- content area end -->

        <!--content area start
        include('layouts.footer')
         content area end -->
         
    </div>


    <!-- Scripts Starts -->
    <!-- build:[src] assets/js/ -->
    <script src="{{ asset('assets/js/jquery-1.12.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/propeller.min.js') }}"></script>

    <script src="{{ asset('bower/jquery.nicescroll/jquery.nicescroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower/jquery-validation/dist/jquery.validate.min.js') }}" type="text/javascript"></script>

    <!-- /build -->
    <script>
        $(document).ready(function() {
            var sPath=window.location.pathname;
            var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
            $(".pmd-sidebar-nav").each(function(){
                $(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
                $(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
                $(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
                $(this).find("a[href='"+sPage+"']").addClass("active");
            });
            $(".auto-update-year").html(new Date().getFullYear());
        });
    </script>

    <!-- Scripts Ends -->

    @yield('scripts')

    <script src="{{ asset('js/common-scripts.js') }}"></script>
    
</body>
</html>
