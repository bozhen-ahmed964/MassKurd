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

    <style>
        p {
            color: black;
        }

        tr {
            color: black;
        }

        h4 {
            color: black;
        }
    </style>
</head>

<body>

    <h1 style="font-weight: bold;font-size: 30px;padding: 20px; color:#262626">Company Name</h1>
    <div style="height: 180px;background: #c5c5c5;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top: 25px;">
                    <p style="height: 6px;font-size: 14px;">to</p>
                    <p style="height: 6px;font-size: 18px;font-weight: bold;">Costumer Name</p>
                    <p style="height: 6px;">Gender</p>
                    <p style="height: 6px;">Age</p>
                    <p style="height: 6px;">Phone Number</p>
                </div>
                <div class="col-md-6" style="text-align: right;margin-top: 25px;">
                    <p style="height: 6px;font-weight: bold;font-size: 18px;">Admin Name</p>
                    <p style="height: 6px;font-weight: bold;">Start Date</p>
                    <p style="height: 6px;font-weight: bold;">End Date</p>
                    <p style="height: 6px;margin-top: 45px;">Signature</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 15px;margin-bottom: 15px;">
        <div class="row" style="width: 1200px;margin-left: 60px;">
            <div class="col-md-6 d-xl-flex justify-content-xl-center align-items-xl-center"
                style="width: 690px;background: #c5c5c5;text-align: center;margin-left: 30px;">
                <div style="width: 300px;">
                    <p>Month Pay </p>
                    <h4>40,000 IQD</h4>
                </div>
                <div style="width: 300px;">
                    <p>Course Pay</p>
                    <h4>40,000 IQD</h4>
                </div>
            </div>
            <div class="col-md-6" style="width: 365px;background: #262626;">
                <p style="color: rgb(255,255,255);font-size: 19px;">TOTAL</p>
                <h1 style="text-align: right;color: rgb(255,255,255);">450,000 IQD</h1>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead style="border-top: 1px solid rgb(0,0,0);border-bottom: 1px solid rgb(0,0,0);">
                <tr>
                    <th>Exercise Name</th>
                    <th style="width: 225px;">Primary Muscle</th>
                    <th>Set</th>
                    <th>Times</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cell 1</td>
                    <td>Cell 2</td>
                    <td>Cell 3</td>
                    <td>Cell 4</td>
                </tr>
                <tr>
                    <td>Cell 3</td>
                    <td>Cell 4</td>
                    <td>Cell 3</td>
                    <td>Cell 4</td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr />
    <p style="text-align: center;font-size: 12px;">THANK YOU FOR YOUR BUSINESS</p>
    <div class="d-xl-flex justify-content-xl-center align-items-xl-center" style="font-size: 12px;">
        <p style="margin-right: 12px;">+964 770 111 2222</p>
        <p>TEST@GMAIL.COM</p>
        <p style="margin-left: 12px;">+964 770 111 2222</p>
    </div>



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
