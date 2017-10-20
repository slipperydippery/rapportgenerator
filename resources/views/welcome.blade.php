<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ URL::asset('/css/app.css') }}" rel="stylesheet">

        <title>Rapport Generator</title>

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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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
                <div class="title m-b-md">
                    Rapport Generator
                </div>
                <div class="generator--selector clearfix">
                    <div class="selectlist selectlist--left">
                        @foreach($sectors as $sector)
                            {{ Form::radio('sector', $sector->id, false, ['id' => $sector->id]) }}  
                            {{ Form::label($sector->id, $sector->title) }} <br>
                        @endforeach
                    </div>
                    <div class="selectlist selectlist--right">
                        @foreach($functies as $functie)
                            {{ Form::radio('functie', $functie->id, false, ['id' => 'functie-' . $functie->id]) }}  
                            {{ Form::label('functie-' . $functie->id, $functie->title) }} <br>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
