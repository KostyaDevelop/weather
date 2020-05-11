<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Погода</title>

    <!-- Js -->
    <script src="{{asset("js/jQuery.js")}}"></script>
    <script src="{{asset("js/script_info.js")}}"></script>

    <!-- Css -->
    <link type="text/css" href="{{asset("css/style_info.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
    <body>

    <div id="form_info">

        <div id="info">
            <?php echo $info ?>
        </div>

        <div class="overlay">
            <div class="popup">
                <h2>Сообщение успешно отправлено на вашу почту!</h2>
                <div class="close-popup"></div>
            </div>
        </div>

    </div>

    </body>
</html>
