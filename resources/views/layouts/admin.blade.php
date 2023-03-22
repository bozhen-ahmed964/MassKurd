<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Style -->
    <link href="{{ asset('/frontend/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/css/material-dashboard.min.css') }}" rel="stylesheet">



    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="/admin/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

    <style>
    span {
        font-size: 20px;
    }
</style>
</head>







<body>

    <div class="g-sidenav-show  bg-gray-200">
        @include('layouts.include.sidebar')

        <div class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mt-4">
            @include('layouts.include.navbar')
            <div class="content">
                @yield('content')
            </div>
            @include('layouts.include.footer')
        </div>
    </div>







    <!-- Scripts -->
    <script src="{{ asset('/public/admin/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('/public/admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('/public/admin/js/material-dashboard.js') }}" defer></script>
    <script src="{{ asset('/public/admin/js/material-dashboard.js.map') }}" defer></script>
    <script src="{{ asset('/public/admin/js/material-dashboard.min.js') }}" defer></script>
    @vite(['resources/js/app.js'])
    @include('sweetalert::alert')
    @yield('scirpt')
</body>

</html>
