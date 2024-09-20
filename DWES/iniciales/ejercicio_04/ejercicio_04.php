<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
        <style>
            table {
                border-collapse: collapse;
                width: 40%;
                margin: 0 auto;
                text-align: center;
            }

            th, td {
                border: 1px solid black;
                padding: 10px;
            }

            .azul{
                color: blue;
                font-size: 1.5rem;
            }

            form{
                margin: auto;
                width: 30%;
                border: 1px solid black;
                margin-bottom: 2rem;
                padding: 1%;
                text-align: center;
            }

            input[type="number"]{
                display: block;
                width: 100%;
                margin: 1% 1%;
            }
        </style>
        <?php
            include "factorial.php";
        ?>
    </head>
    <body>
        <form method="get">
            <label for="n1">Introduce el primer numero</label>
            <input type="number" name="n1" required>

            <label for="n2">Introduce el segundo numero</label>
            <input type="number" name="n2" required>

            <input type="submit" name="enviar">
        </form>
        <table>
            <thead>
                <th>
                    <?php       
                        $n1 = $_GET['n1'];
                        $n2 = $_GET['n2'];
                        echo "<th> Tabla de factoriales del $n1 al $n2 </th>";
                    ?>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td class="azul">Número</td>
                    <td class="azul">Factorial</td>
                </tr>
                <?php
                    for ($z = $n1; $z <= $n2; $z++) {
                        $total = factorial($z);
                        echo "<tr><td>Factorial de $z</td><td>$total</td></tr>";
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