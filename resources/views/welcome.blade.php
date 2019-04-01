<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GameB</title>

        <link rel="shortcut icon" href="{{url('feliz.png')}}" type="image/x-icon" />    

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
    </head>
    <body>
        <div style="width: 1200px; margin-left: auto; margin-right: auto; padding: 0px; text-align: center; padding-top: 130px;">
            <img src="{!! url('santo.png') !!}">
            <div class="title m-b-md">
                GameB
            </div>

            <div>
                <form method="POST" action="{!! url('/home') !!}">
                    {{ csrf_field() }}
                    <label style="font-size: 1.5em;">Tema</label>
                    <br>
                    <select name="tema" style="width: 200px; padding: 3px; font-size: 1em; color: gray; margin-top: 5px;">
                        @foreach($temas as $tema)
                            <option>{!! $tema->tema !!}</option>
                        @endforeach
                    </select>
                    <br><br>
                    <label style="font-size: 1.5em;">Categoria</label>
                    <br>
                    <select name="nivel" style="width: 200px; padding: 3px; font-size: 1em; color: gray; margin-top: 5px;">
                        <option value="child">Sou criança</option>
                        <option value="adult">Sou adulto</option>
                    </select>
                    <br>
                    @if(sizeof($temas) == 0)
                        <button type="submit" style="margin-top: 20px; background: none; border: none; color: lightgray; font-size: 2em; text-transform: uppercase; font-style: italic; font-family: sans-serif;" disabled>
                            Vamos lá!
                        </button>
                    @else
                        <button type="submit" style="margin-top: 20px; background: none; border: none; color: gray; font-size: 2em; cursor: pointer; text-transform: uppercase; font-style: italic; font-family: sans-serif;" disabled>
                            Vamos lá!
                        </button>
                    @endif
                </form>
                <div class="links" style="margin-top: 20px;">
                    <a href="{!! url('question') !!}">Configurar</a>
                </div>
            </div>
            <br>
            <p>Para tela cheia tecle "F11"</p>
        </div>
    </body>
</html>
