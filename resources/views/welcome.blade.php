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
                        <div class="social--icons">
                            <a href="#"><img src="img/shareicon.png" alt=""></a>
                            <a href="#"><img src="img/facebook.png" alt=""></a>
                        </div>
                        <span class="ingelogd">U bent ingelogd als <span class="ingelogd--naam">Maarten de Jager</span></span>
                    </div>
                </div>
                <div class="title m-b-md">
                    Rapportgenerator
                </div>
                <div class="subtitle">
                    Ondersteuningsstructuur van de cultuursector
                </div>
                <div class="introtext--wrap">
                    <div class="introtext">
                        <p>Deze rapportgenerator maakt het mogelijk om informatie over de ondersteuningsstructuur van de cultuursector te lezen vanuit sector- of functieperspectief. Om het rapport te lezen vanuit sectorperspectief selecteert u de sector en kiest u daarbij de bijbehoordende funcite. Wilt u het rapport lezen vanuit functieperspectief selecteert u eerst een functie. U kunt deze onderdelen uit het rapport op uw eigen clipboard bewaren, of de geselecteerde informatie delen. Wilt u het hele rapport lezen, klik op read all. </p>
                    
                        <p>Deze rapportgenerator geeft de mogelijkheid om informatie te lezen waarin u zelf geïnteresseerd bent.</p>
                    </div>
                </div>
                <div class="generator--selector--wrap">
                    <div class="generator--selector clearfix">
                        <div class="selectlist selectlist--left">
                            <h3>Sector</h3>
                            <input id="0" name="sector" type="checkbox" value="0">  
                            <label for="0">read all</label> <br>
                            @foreach($sectors as $sector)
                                {{ Form::checkbox('sector', $sector->id, false, ['id' => $sector->id]) }}  
                                {{ Form::label($sector->id, $sector->title) }} <br>
                            @endforeach
                        </div>
                        <div class="selectlist selectlist--right">
                            <h3>Functie</h3>
                            <input id="functie-0" name="functie" type="checkbox" value="0" >  
                            <label for="functie-0">read all</label> <br>
                            @foreach($functies as $functie)
                                {{ Form::checkbox('functie', $functie->id, false, ['id' => 'functie-' . $functie->id]) }}  
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
                        @foreach($elements as $element)
                            <li><a href="#">{{ $element->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="generator--results">
                    @foreach($elements as $element)
                        <div class="result" id="Titel1">
                            <div class="fav">
                                <svg class="fav-star" viewBox="0 0 114 110">
                                    <path d="M48.7899002,5.95077319 L39.3051518,35.1460145 L8.60511866,35.1460145 C4.87617094,35.1519931 1.57402643,37.5554646 0.422104463,41.1020351 C-0.7298175,44.6486057 0.529798011,48.5337314 3.54354617,50.7297298 L28.3840111,68.7758317 L18.8992627,97.971073 C17.7496089,101.520283 19.0141379,105.406227 22.0323508,107.599168 C25.0505637,109.792109 29.1370771,109.794067 32.1573906,107.604021 L56.9864557,89.5693186 L81.8269206,107.615421 C84.8472342,109.805467 88.9337475,109.803509 91.9519605,107.610568 C94.9701734,105.417627 96.2347024,101.531683 95.0850486,97.9824729 L85.6003001,68.7986315 L110.440765,50.7525296 C113.466376,48.5582894 114.732852,44.663975 113.576698,41.1097771 C112.420545,37.5555791 109.105303,35.1516627 105.367793,35.1574144 L74.6677595,35.1574144 L65.1830111,5.96217312 C64.0286485,2.41064527 60.7208743,0.00457304502 56.9864557,5.53367114e-06 C53.2527571,-0.00420898295 49.9421526,2.39931752 48.7899002,5.95077319 Z"></path>
                                </svg>
                            </div>
                            <h2>{{ $element->title }}</h2>
                            <span class="intro"> {!! $element->short !!} </span>
                            <span class="body"> {!! $element->body !!} </span>
                        </div>
                    @endforeach 
                </div>

            </div>
        </div>
    </body>
</html>
