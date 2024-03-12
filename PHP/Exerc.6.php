<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
        $velociadade_ms = 539.87;

        $calculo =  $velociadade_ms * 3.6;

        $resultado = number_format($calculo, 2, ",", ".");

        echo"Resultado: $resultado";

        ?>
    </body>
</html>