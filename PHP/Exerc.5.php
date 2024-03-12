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
        
        $quadrado_num1 = $num1 ** 2;
        $quadrado_num2 = $num2 ** 2;

        $soma = $quadrado_num1 + $quadrado_num2;

        $resultado = number_format($soma, 2, ",", ".");

        echo"Quadrado do $num1: $quadrado_num1 <br>";
        echo"Quadrado do $num1: $quadrado_num2 <br>";
        echo"Resultado: $resultado";

        ?>
    </body>
</html>