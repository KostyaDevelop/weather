<html>
    <head>
        <style>
           div{
               color: #4aa0e6;
           }
        </style>
    </head>
    <body>
        <div>
            Здраствуйте, <? echo($data['name']) ?> !<br>
            На данный момент температура в Москве <? echo($data['temperature']) ?><br>
        </div>
    </body>
</html>
