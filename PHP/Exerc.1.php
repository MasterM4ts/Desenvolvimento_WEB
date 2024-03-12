<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
        $num1 = 50854213.4512;
        $num2 = 4545754221.45758;

        $soma = $num1 + $num2;

        $multiplicacao = $soma + $num1;

        $resultado = number_format($multiplicacao, 2, ",", ".");

        echo"Resultado: $multiplicacao";

        ?>
    </body>
</html>