<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'My Wiki') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

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
            .msgToggle{
                display:none;
            }
        </style>
        <script>
            function clickMessage(){
                var message="Test Message Recieved";
                document.getElementById("fillThis").value = message;
            }
            function toggleMessage(){
                $("#toggleP").toggleClass('msgToggle');
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
                    Test Wiki: TDD Application
                </div>
                <div><strong><input type="text" id="fillThis" name="fillThis" style="border:none;font-size:20px;"/></strong></div>
                <div class="links">
                    <a href="{{ route('wiki.index') }}"><button class="btn btn-primary my-primary">Wiki Home</button></a>
                    <button onClick="clickMessage()" class="btn btn-primary my-primary">Click for Test Message</button>
                    {{-- <button onClick="toggleMessage()" id="toggler" class="btn btn-primary my-primary">Click To Toggle</button> --}}
                    <a href="/testpage"><button class="btn btn-primary my-primary">Press</button></a>
                    <p id="toggleP" class="msgToggle">This paragraph is toggling</p>
                </div>
            </div>
        </div>
    </body>
</html>
