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

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 8px;
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
                    <div class="result" id="Titel1">
                        <h2>Title</h2>
                        <span class="intro">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        </span>
                        <span class="body">
                            <p>Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Non nisi est sit amet. Neque volutpat ac tincidunt vitae semper. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Nulla facilisi nullam vehicula ipsum a arcu. Maecenas pharetra convallis posuere morbi leo urna molestie at elementum. Facilisi morbi tempus iaculis urna id. Nec feugiat in fermentum posuere. Massa sed elementum tempus egestas sed sed. Sit amet consectetur adipiscing elit ut. Eget velit aliquet sagittis id consectetur purus ut. Elementum curabitur vitae nunc sed velit dignissim.</p>
                        </span>
                    </div>

                    <div class="result" id="Titel2">
                        <h2>Volgende Title</h2>
                        <span class="intro">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        </span>
                        <span class="body">
                            <p>Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Non nisi est sit amet. Neque volutpat ac tincidunt vitae semper. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Nulla facilisi nullam vehicula ipsum a arcu. Maecenas pharetra convallis posuere morbi leo urna molestie at elementum. Facilisi morbi tempus iaculis urna id. Nec feugiat in fermentum posuere. Massa sed elementum tempus egestas sed sed. Sit amet consectetur adipiscing elit ut. Eget velit aliquet sagittis id consectetur purus ut. Elementum curabitur vitae nunc sed velit dignissim.</p>
                        </span>
                    </div>

                    <div class="result" id="Titel3">
                        <h2>Resultaat nummer drie</h2>
                        <span class="intro">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        </span>
                        <span class="body">
                            <p>Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Non nisi est sit amet. Neque volutpat ac tincidunt vitae semper. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Nulla facilisi nullam vehicula ipsum a arcu. Maecenas pharetra convallis posuere morbi leo urna molestie at elementum. Facilisi morbi tempus iaculis urna id. Nec feugiat in fermentum posuere. Massa sed elementum tempus egestas sed sed. Sit amet consectetur adipiscing elit ut. Eget velit aliquet sagittis id consectetur purus ut. Elementum curabitur vitae nunc sed velit dignissim.</p>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
