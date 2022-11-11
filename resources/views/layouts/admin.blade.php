<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Style -->
    <link href="{{ asset('frontend/css/material-dashboard.css') }}" rel="stylesheet">


    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="admin/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
 
</head>

<body>

    <div class="g-sidenav-show  bg-gray-200">
        @include('layouts.include.sidebar')

        <div class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
         @include('layouts.include.navbar')
            <div class="content">
                @yield('content')
            </div>
            @include('layouts.include.footer')
        </div>
    </div>







    <!-- Scripts -->
    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/chartjs.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>


    @yield('scirpt')
</body>

</html>
