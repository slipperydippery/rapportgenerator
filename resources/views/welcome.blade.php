<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ URL::asset('/css/app.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

        <title>Rapport Generator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: ariel, sans-serif;
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
                    <div class="menubar--content clearfix">
                        <div class="social--icons">
                            <a href="#"><img src="img/shareicon.png" alt=""></a>
                            <a href="#"><img src="img/facebook.png" alt=""></a>
                        </div>
                        <div class="bereschotlogo">
                            <img src="img/berenschot-logo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="title--wrap">   
                    <div class="title m-b-md">
                        Rapportgenerator
                    </div>
                    <div class="subtitle">
                        Ondersteuningsstructuur van de cultuursector
                    </div>
                    <div class="introtext--wrap">
                        <div class="introtext">
                            <p>Deze rapportgenerator maakt het mogelijk om informatie over de ondersteuningsstructuur van de cultuursector te lezen vanuit sector- of functieperspectief. Om het rapport te lezen vanuit sectorperspectief selecteert u de sector en kiest u daarbij de bijbehorende functie. Wilt u het rapport lezen vanuit functieperspectief selecteert u eerst een functie. U kunt deze onderdelen uit het rapport op uw eigen clipboard bewaren, of de geselecteerde informatie delen. Wilt u het hele rapport lezen, klik op <a href="#">read all</a>. 
                        
                            <p>Deze rapportgenerator geeft de mogelijkheid om informatie te lezen waarin u zelf geïnteresseerd bent.</p>
                        </div>
                    </div>
                </div>
                <div id="app">
                    <rapportgenerator></rapportgenerator>-
                </div>
                <div class="selectlist--switch"> <> </div>
                <div class="selectlist--plus"> + </div>
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
                            <h2>{{ $element->title }}</h2>
                            <span class="intro"> {!! $element->short !!} </span>
                            <span class="body"> {!! $element->body !!} </span>
                        </div>
                    @endforeach 
                </div>

            </div>
        </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>

</html>
