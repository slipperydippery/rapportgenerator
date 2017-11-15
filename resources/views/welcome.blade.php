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

        <title>Ondersteuningsstructuur Cultuursector</title>

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

            <div class="content clearfix">
                <div class="bereschotlogo--print">
                    <img src="img/berenschot-logo.svg" alt="">
                </div>
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
                            <p>Deze website geeft het rapport Ondersteuningsstructuur Cultuursector weer. Dit rapport is in november 2017 opgesteld door Berenschot. Het beschrijft de uitkomsten van het onderzoek naar de ondersteuningsstructuur van de cultuursector, dat Berenschot heeft uitgevoerd in opdracht van het ministerie van OCW. Berenschot heeft 6 sectoren en 5 bovensectorale onderwerpen onderzocht en 7 ondersteuningsfuncties onderscheiden.</p>

<p>Deze rapportgenerator geeft u de mogelijkheid om uw eigen selectie te maken uit het rapport 'Ondersteuningsstructuur cultuursector'. U kunt het rapport ordenen en vervolgens lezen vanuit verschillende perspectieven:</p>
<ul>
    <li>u kunt het complete rapport selecteren vanuit sector- of functieperspectief {NB: volgorde omgedraaid}</li>
    <li>u kunt onderdelen uit het rapport selecteren vanuit sector- of functieperspectief</li>
    <li>en u kunt kiezen voor speciale selecties met verschillende andere onderdelen uit het rapport</li>
</ul>

<p>Maak een eerst een keuze in het menu [algemeen] en selecteer daarna een of meerdere onderdelen uit het menu 'sector' en het menu 'functie'. De rapportgenerator laat u direct het resultaat zien. U kunt uw selectie naar behoefte aanpassen. U kunt uw selectie vervolgens in printen en/of als PDF downloaden met de [print]knop.</p>
                        </div>
                    </div>
                </div>
                <div id="app">
                    <rapportgenerator></rapportgenerator>
                </div>
                <div class="selectlist--switch"> <> </div>
                <div class="selectlist--plus"> + </div>
                

            </div>
        </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>

</html>
