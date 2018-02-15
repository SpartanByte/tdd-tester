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
        </style>
        <script>
            function clickMessage(){
                // alert("Test Message Recieved");
                var message="Test Message Recieved";
                document.getElementById("fillThis").value = message;
            }
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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
                <div class="title m-b-md" style="color:#252525;">
                    You have reached the test page!
                </div>
                <div><input type="text" id="fillThis" name="fillThis" style="border:none;font-size:20px;"/></div>
                <div class="links">
                    <a href="https://phpunit.de/documentation.html">PHP Unit Documentation</a>
                    <a href="https://laravel.com/docs/5.5/testing">Laravel Application Testing</a>
                    <a href="https://laracasts.com/series/phpunit-testing-in-laravel">Testing Laravel (Laracasts)</a>
                    <button onClick="clickMessage()" class="btn">Click for Test Message</button>
                    <a href="https://greatinsight.com"><button class="btn">Press</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
