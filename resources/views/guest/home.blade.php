<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Deliveboo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: red; */
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            /* .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            } */

            .login{
                background-color: red;
                height: 80px;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .card {
                border-radius: 20px;
            }

            footer{
                background-color: red;
                height: 80px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            <div class="login">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Sei un ristorante?  Registrati!</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

            <!-- start container -->
            <div class="container" id="root">
                <!-- <p>CIAOOOOOO</p> -->
            <!-- end container -->
            </div>
            <script src="{{ asset ('js/app.js')}}"> </script>
    </body>

    
</html>