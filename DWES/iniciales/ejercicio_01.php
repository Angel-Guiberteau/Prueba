<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th colspan="3">Tabla de factoriales del 1 al 10</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="azul">Número</td>
                    <td class="azul">Factorial</td>
                </tr>
                <?php
                    // Manera con for
                    for ($i = 0; $i <= 10; $i++) {
                        $total = 1;
                        for ($j = 1; $j <= $i; $j++) {
                            $total *= $j;
                        }
                        echo "<tr><td>Factorial de $i</td><td>$total</td></tr>";
                    }
                    // Manera con whiles
                    $z = 0;
                    $k = 1;
                    $total = 1;
                    while ($z <= 10){
                        while ($k <= $z ){
                            $total *= $k;
                            $k++;
                        }
                        echo "<tr><td>Factorial de $z</td><td>$total</td></tr>";
                        $z++;
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Angel Guiberteau Franco</td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>