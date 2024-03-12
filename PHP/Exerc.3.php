<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
        $num1 = 4872124544545456454544.564657515180;

        $porcentagem = $num1 * 15/100;
        $resultado = number_format($porcentagem, 2, ",", ".");

        echo"Reultado: $resultado.";

        ?>
    </body>
</html>