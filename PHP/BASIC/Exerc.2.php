<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
        $num1 = 51.76;
        $num2 = 88.48;
        $num3 = 64.86;

        $media = ($num1 + $num2 + $num3) / 3;

        $resultado = number_format($media, 2, ",", ".");

        if ($resultado >= 70.00) {
            echo"Aprovado :)";
          }

        else {
            echo"Reprovado :|";
        }

        ?>
    </body>
</html>