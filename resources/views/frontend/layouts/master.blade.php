<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!--Summernote-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Modal-->
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

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