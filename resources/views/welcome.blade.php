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
                /*align-items: center;*/
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
                <div class="menubar">
                    <div class="menubar--content">
                        <span class="ingelogd">U bent ingelogd als <span class="ingelogd--naam">Maarten de Jager</span></span>
                    </div>
                </div>
                <div class="title m-b-md">
                    Rapport Generator
                </div>
                <div class="subtitle">
                    Ondersteuningsstructuur van de cultuursector
                </div>
                <div class="introtext">
                    <p>Deze rapportgenerator maakt het mogelijk om informatie over de ondersteuningsstructuur van de cultuursector te lezen vanuit sector- of functieperspectief. Om het rapport te lezen vanuit sector-functie selecteert u de sector en kiest u daarbij de bijbehoordende funcite. Wilt u het rapport lezen vanuit functie perspectief selecteert u eerst een functie. U kunt deze onderdelen uit het rapport op uw eigen clipboard bewaren, of de geselecteerde informatie delen. Wilt u het hele rapport lezen, klik op read all. </p>

                    <p>Deze rapportgenerator geeft de mogelijkheid om informatie te lezen waarin u zelf geïnteresseerd bent.</p>
                </div>
                <div class="generator--selector--wrap">
                    <div class="generator--selector clearfix">
                        <div class="selectlist selectlist--left">
                            <h3>Sector</h3>
                            @foreach($sectors as $sector)
                                {{ Form::radio('sector', $sector->id, false, ['id' => $sector->id]) }}  
                                {{ Form::label($sector->id, $sector->title) }} <br>
                            @endforeach
                        </div>
                        <div class="selectlist selectlist--right">
                            <h3>Functie</h3>
                            @foreach($functies as $functie)
                                {{ Form::radio('functie', $functie->id, false, ['id' => 'functie-' . $functie->id]) }}  
                                {{ Form::label('functie-' . $functie->id, $functie->title) }} <br>
                            @endforeach
                        </div>
                        <div class="selectlist--switch"> <> </div>
                        <div class="selectlist--plus"> + </div>
                    </div>
                </div>

                <div class="generator--shortresults">
                    <h2>Resultaten</h2>
                    <ul>
                        <li><a href="#Titel1">Titel</a></li>
                        <li><a href="#Titel2">Volgende Titel</a></li>
                        <li><a href="#Titel3">Nog een resultaat</a></li>
                    </ul>
                </div>

                <div class="generator--results">
                    @foreach($elements as $element)
                        <div class="result" id="Titel1">
                            <h2>{{ $element->title }}</h2>
                            <span class="intro"> {!! $element->short !!} </span>
                            <span class="body"> { $element->body }} </span>
                        </div>
                    @endforeach 
                </div>

            </div>
        </div>
    </body>
</html>
