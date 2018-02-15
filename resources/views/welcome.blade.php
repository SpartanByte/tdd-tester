<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
            .btn-primary.my-primary{
                font-weight:bold;
                text-transform:uppercase;
            }
        </style>
        <script>
            function clickMessage(){
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
                    My Test Driven <br />Development Application
                </div>
                <div><input type="text" id="fillThis" name="fillThis" style="border:none;font-size:20px;"/></div>
                <div class="links">
                    <a href="https://phpunit.de/documentation.html"><button class="btn btn-primary my-primary">PHP Unit Documentation</button></a>
                    <a href="https://laravel.com/docs/5.5/testing"><button class="btn btn-primary my-primary">Laravel Application Testing</button></a>
                    <a href="https://laracasts.com/series/phpunit-testing-in-laravel"><button class="btn btn-primary my-primary">Testing Laravel (Laracasts)</button></a>
                    <button onClick="clickMessage()" class="btn btn-primary my-primary">Click for Test Message</button>
                    <a href="/testpage"><button class="btn btn-primary my-primary">Press</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
