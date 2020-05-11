<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Погода</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Js -->
        <script src="{{asset("js/jQuery.js")}}"></script>
        <script src="{{asset("js/script_index.js")}}"></script>

        <!-- Css -->
        <link type="text/css" href="{{asset("css/style_index.css")}}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>

        <div id="all_form">

            <form method="get" name="form_start" id="form_start" class="form-group">
                <button type="button" name="start" id="start" class="btn btn-primary" >Старт</button>
            </form>

            <form method="get" name="form_weather" action="{{route("weather")}}" class="form-group" id="form_weather">
                Имя
                <br>
                <input type="text" name="name"  required>
                    <br>
                Почта
                <br>
                <input type="email" name="email" required>
                    <br><br>
                <input class="btn-primary" type="submit" value="Узнать погоду" >
            </form>

        </div>

    </body>
</html>
