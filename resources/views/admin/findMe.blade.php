<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&family=Roboto:ital,wght@0,100;0,400;0,700;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background-color: #161623;
            min-height: 100vh;
        }

        .sections::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#f00, #f0f);
            clip-path: circle(30% at right 70%);
        }

        .sections::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#2194f3, #e91e63);
            clip-path: circle(20% at 10% 10%);
        }

        .container {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin: 40px 0;

        }

        .container .card {
            position: relative;
            width: 300px;
            height: 400px;
            background: rgba(255, 255, 255, 0.05);
            margin: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(10px);
        }

        .container .card .content {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            opacity: 0.5;
            transition: 0.5s;
        }

        .container .card:hover .content {
            opacity: 1;
            transform: translateY(-25px);
        }

        .container .card .content .imgBox {
            position: relative;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 10px solid rgba(0, 0, 0, 0.25);

        }

        .container .card .content .imgBox img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .container .card .content .contentBox h3 {

            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 500;
            font-size: 18px;
            text-align: center;
            margin: 20px 0 10px;
            line-height: 1.1em;
        }


        .container .card .content .contentBox h3 span {

            font-size: 12px;
            font-weight: 300;
            text-transform: initial;
        }

        .container .card .socialMedia {
            position: absolute;
            bottom: 50px;
            display: flex;
        }

        .container .card .socialMedia li {

            list-style: none;
            margin: 0 10px;
            transform: translateY(40px);
            transition: 0.5s;
            opacity: 0;
            transition-delay: calc(0.1s * var(--i));


        }


        .container .card:hover .socialMedia li {
            transform: translateY(0px);
            opacity: 1;

        }



        .container .card .socialMedia li a {
            color: #fff;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="card">
                <div class="content">
                    <div class="imgBox"><img src="{{asset('public/admin/image/bozhen.jpg')}}" alt="bozhenImg"></div>
                    <div class="contentBox">
                        <h3>Bozhen Ahmed <br> <span> Team Manager | Back End Developer</span></h3>
                    </div>
                </div>
                <ul class="socialMedia">
                    <!-- Facebook -->
                    <li style="--i:1">
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    </li>

                    <!-- Twitter -->
                    <li style="--i:2">
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>

                    <!-- Instagram -->
                    <li style="--i:3">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="content">
                    <div class="imgBox"><img src="/public/image/candy.png" alt="candyImg"></div>
                    <div class="contentBox">
                        <h3>Candy Jamal <br> <span> Front End Developer</span></h3>
                    </div>
                </div>
                <ul class="socialMedia">
                    <!-- Facebook -->
                    <li style="--i:1">
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    </li>

                    <!-- Twitter -->
                    <li style="--i:2">
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>

                    <!-- Instagram -->
                    <li style="--i:3">
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>


                </ul>
            </div>

        </div>
    </section>

</body>

</html>
