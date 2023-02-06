<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Style -->
    <link href="{{ asset('/frontend/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/admin/css/material-dashboard.min.css') }}" rel="stylesheet">



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
    <div class="row py-5">
        <div
            class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-end mb-4">
            <div style="max-width: 450px;">
                <p class="fw-bold text-success mb-2">Special Offer</p>
                <h2 class="fw-bold">The best solution for<br />you and your<br />customers</h2>
                <p class="my-3">Dictumst magna ultricies justo auctor. Gravida morbi etiam id, magna lacinia augue.
                </p>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary ">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary mx-4">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="p-5 mx-lg-5" style="background: center / contain no-repeat;">
                <img class="rounded shadow w-100 fit-cover" style="min-height: 300px;"
                    src="{{ asset('public/images/main-background.jpg') }}" />
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2">Our Team</p>
                <h2 class="fw-bold">Contact Us Any Time</h2>
                <p class="text-muted">No matter the project, our team can handle it. </p>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 mx-auto" style="max-width: 700px;">
            <div class="col mb-4" style="width: 370px;">
                <div class="text-center"><img class="rounded mb-3 fit-cover" width="150" height="150"
                        src="team/avatar4.jpg" />
                    <h5 class="fw-bold mb-0">Bozhen Ahmed</h5>
                    <p class="text-muted mb-2">Manager<br />Back-End Developer</p>
                </div>
            </div>
            <div class="col mb-4" style="text-align: left;width: 300px;">
                <div class="text-center"><img class="rounded mb-3 fit-cover" width="150" height="150"
                        src="team/avatar6.jpg" />
                    <h5 class="fw-bold mb-0"><strong>Candy Jamal</strong></h5>
                    <p class="text-muted mb-2">UI | Ux <br />Front-End Developer</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center bg-dark">
        <div class="container text-white py-4 py-lg-5">
            <ul class="list-inline">
                <li class="list-inline-item me-4"><a class="link-light" href="#">Web design</a></li>
                <li class="list-inline-item me-4"><a class="link-light" href="#">Development</a></li>
                <li class="list-inline-item"><a class="link-light" href="#">Hosting</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item me-4"><svg class="bi bi-facebook text-light"
                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                        </path>
                    </svg></li>
                <li class="list-inline-item me-4"><svg class="bi bi-twitter text-light"
                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                        </path>
                    </svg></li>
                <li class="list-inline-item"><svg class="bi bi-instagram text-light" xmlns="http://www.w3.org/2000/svg"
                        width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                        </path>
                    </svg></li>
            </ul>
            <p class="text-muted mb-0">Copyright © 2023 Brand</p>
        </div>
    </footer>




    <!-- Scripts -->
    <script src="{{ asset('/public/admin/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('/public/admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('/public/admin/js/material-dashboard.js') }}" defer></script>
    <script src="{{ asset('/public/admin/js/material-dashboard.js.map') }}" defer></script>
    <script src="{{ asset('/public/admin/js/material-dashboard.min.js') }}" defer></script>
    @yield('scirpt')
</body>

</html>
