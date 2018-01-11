<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Login | Propeller - Admin Dashboard">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login | Laravel</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/images/favicon.ico') }}">

    <!-- Google icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower/bootstrap-material-design-icons/css/material-icons.css') }}">

    <!-- Bootstrap css -->
    <!-- build:[href] assets/css/ -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- /build -->

    <!-- Propeller css -->
    <!-- build:[href] assets/css/ -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/propeller.min.css') }}">
    <!-- /build -->

    @yield('stylesheet')

    <!-- Propeller theme css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/css/propeller-theme.css') }}" />

    <!-- Propeller admin theme css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/css/propeller-admin.css') }}">

</head>

<body class="body-custom">
    @yield('content')

    <!-- Scripts Starts -->
    <!-- build:[src] assets/js/ -->
    <script src="{{ asset('assets/js/jquery-1.12.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/propeller.min.js') }}"></script>
    <script src="{{ asset('bower/jquery-validation/dist/jquery.validate.min.js') }}" type="text/javascript"></script>

    @yield('scripts')

</body>
</html>