<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
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
</head>

<body>


  

    <!-- Scripts -->
    <script src="{{ asset('/public/admin/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('/public/admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('/public/admin/js/material-dashboard.js') }}" defer></script>
    <script src="{{ asset('/public/admin/js/material-dashboard.js.map') }}" defer></script>
    <script src="{{ asset('/public/admin/js/material-dashboard.min.js') }}" defer></script>
    @vite(['resources/js/app.js'])
    @yield('scirpt')
</body>

</html>
