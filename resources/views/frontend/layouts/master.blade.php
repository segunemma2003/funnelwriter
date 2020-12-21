<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!-- Header and Sidenav CSS -->
    <link rel="stylesheet" href="{{asset('publics/header&sidenav.css')}}">

    <!-- Dashboard CSS -->
    <link rel="stylesheet" href="{{asset('index.css')}}">

    <title>Dashboard | Funnel Writer</title>
</head>
<body>
    @stack('style')
    <!-- Header Section -->
    @include('frontend.layouts.headers')

    <!-- Main Section -->
    <section class="main__section">
        <!-- Sidebar -->
        @include('frontend.layouts.navbar')

        <!-- Main Content -->
        @yield('content')
    </section>

    <!-- Scripts -->
    @stack('script')
    <script src="{{asset('publics/header&sidenav.js')}}"></script>
    <script src="{{asset('index.js')}}"></script>
</body>
</html>