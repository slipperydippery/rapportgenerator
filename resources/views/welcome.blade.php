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
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-93563705-4"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-93563705-4');
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
                            <a href="http://www.berenschot.nl/kunstencultuur">
                                <img src="img/berenschot-logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="title--print">
                        <h1>Ondersteuningsstructuur Cultuursector</h1>
                        <h2>Inventariserend onderzoek naar ondersteuningsfuncties</h2>
                        <div class="introtext">
                            <p>Dit rapport beschrijft de resultaten van het onderzoek naar de ondersteuningsstructuur van de cultuursector dat Berenschot in 2017 heeft uitgevoerd in opdracht van het ministerie van OCW. Het onderzoek betreft een inventarisatie, enerzijds van de activiteiten die plaatsvinden op verschillende ondersteuningsfuncties, anderzijds van de behoeften die leven in het cultuurproducerende veld. </p>

                            <p>Het onderzoek gaat in op de ondersteunende activiteiten van onder meer de rijksgesubsidieerde sectorale en bovensectorale ondersteunende instellingen en de rijkscultuurfondsen. De bevindingen in dit rapport zijn primair gebaseerd op een uitgebreide documentstudie en op gesprekken met elk van de betreffende instellingen en de begeleidingscommissie van het ministerie van OCW. </p>

                            <p>Verder is input gehaald uit werksessies met betrokkenen uit de diverse deelsectoren. Het doel van deze werksessies was om verdieping en aanscherping te krijgen van wat er leeft in de cultuursector, en wat de verwachtingen van spelers zijn van de ondersteuning. Daarmee ontstaat een beeld van ervaringen met de ondersteuningsfuncties en de waardering daarvoor binnen de sector. Hoewel het totaal aantal gesprekspartners ruim is, is het aantal bevraagden per deelsector beperkt. Er is hierbij dan ook geen sprake van input die de mening van de meerderheid van het culturele veld omvat. </p>

                            <p>Dit onderzoek geeft, zonder volledig te kunnen zijn, een overzicht van de grote variëteit aan ondersteunende activiteiten die worden uitgevoerd door spelers in de cultuursector en een indruk van de waardering daarvoor. Naar aanleiding van deze inventarisatie zal het ministerie van OCW een adviesaanvraag opstellen ten behoeve van de Raad voor Cultuur, om een advies te formuleren over de toekomstige inrichting van de ondersteuningsstructuur. Dit advies zal, in het bredere kader van de herziening van het cultuurbestel, na de zomer van 2018 worden uitgebracht. </p>
                        </div>
                        <div class="authors">
                            <em>31 januari 2018</em> <br>
                            Bastiaan Vinkenburg <br>
                            Jan-Willem van Giessen <br>
                            Robert Wester <br>
                            Hanna Marije Booij <br>
                            Lonneke Broeks <br>
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
                            <p>Dit rapport beschrijft de resultaten van het onderzoek naar de ondersteuningsstructuur van de cultuursector dat Berenschot in 2017 heeft uitgevoerd in opdracht van het ministerie van OCW. Het onderzoek betreft een inventarisatie, enerzijds van de activiteiten die plaatsvinden op verschillende ondersteuningsfuncties, anderzijds van de behoeften die leven in het cultuurproducerende veld. </p>

                            <p>Het onderzoek gaat in op de ondersteunende activiteiten van onder meer de rijksgesubsidieerde sectorale en bovensectorale ondersteunende instellingen en de rijkscultuurfondsen. De bevindingen in dit rapport zijn primair gebaseerd op een uitgebreide documentstudie en op gesprekken met elk van de betreffende instellingen en de begeleidingscommissie van het ministerie van OCW. </p>

                            <p>Verder is input gehaald uit werksessies met betrokkenen uit de diverse deelsectoren. Het doel van deze werksessies was om verdieping en aanscherping te krijgen van wat er leeft in de cultuursector, en wat de verwachtingen van spelers zijn van de ondersteuning. Daarmee ontstaat een beeld van ervaringen met de ondersteuningsfuncties en de waardering daarvoor binnen de sector. Hoewel het totaal aantal gesprekspartners ruim is, is het aantal bevraagden per deelsector beperkt. Er is hierbij dan ook geen sprake van input die de mening van de meerderheid van het culturele veld omvat. </p>

                            <p>Dit onderzoek geeft, zonder volledig te kunnen zijn, een overzicht van de grote variëteit aan ondersteunende activiteiten die worden uitgevoerd door spelers in de cultuursector en een indruk van de waardering daarvoor. Naar aanleiding van deze inventarisatie zal het ministerie van OCW een adviesaanvraag opstellen ten behoeve van de Raad voor Cultuur, om een advies te formuleren over de toekomstige inrichting van de ondersteuningsstructuur. Dit advies zal, in het bredere kader van de herziening van het cultuurbestel, na de zomer van 2018 worden uitgebracht. </p>


<p>Deze rapportgenerator geeft u de mogelijkheid om uw eigen selectie te maken uit het rapport 'Ondersteuningsstructuur Cultuursector'. U kunt het rapport ordenen en vervolgens lezen vanuit verschillende perspectieven:</p>
<ul>
    <li>u kunt het complete rapport selecteren vanuit sector- of functieperspectief</li>
    <li>u kunt onderdelen uit het rapport selecteren vanuit sector- of functieperspectief</li>
    <li>en u kunt kiezen voor speciale selecties met verschillende andere onderdelen uit het rapport</li>
</ul>

<p>Maak eerst een keuze in het menu 'algemeen' en selecteer daarna een of meerdere onderdelen uit het menu 'sector' en het menu 'functie'. De rapportgenerator laat u direct het resultaat zien. U kunt uw selectie naar behoefte aanpassen. U kunt uw selectie vervolgens printen en/of als PDF downloaden met de printknop.</p>
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
