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

        $porcentagem_5 = $num1 * 15/100;
        $porcentagem_50 = $num1 * 50/100;

        $resultado_5 = number_format($porcentagem_5, 2, ",", ".");
        $resultado_50 = number_format($porcentagem_50, 2, ",", ".");

        echo"Reultado 5%: $resultado_5.<br>";
        echo"Reultado 50%: $resultado_50.";


        ?>
    </body>
</html>