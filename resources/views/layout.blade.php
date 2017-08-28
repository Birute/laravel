<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .page-content {
              margin-top:50px;
              text-align: left;
              width: 600px;
              background-color: pink;
              /*display: inline-block;*/
              margin: 0 auto; /*išcentravimas*/
              /*T r o u b le*/

            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Labas pasauli!
                </div>
<!-- Nuorodos atrodo taip pat, kaip ir routs faile -->
<!-- Su http absoliuti nuoroda -->
<!-- Su /reliatyvi nuoroda -->
                <div class="links">
                    <a href="/">Homepage</a>
                    <a href="/about">About us</a>
                    <a href="/testimonials">Testimonials</a>
                </div>
                <div class="page-content">
                  <!-- Į šitą vietą bus paduodamas content, bus galima įdėti turinį iš welcome.blade-->
                  @yield('content');
                </div>
            </div>
        </div>
    </body>
</html>
