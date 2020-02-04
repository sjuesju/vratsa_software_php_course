<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Some vars</title>
        <style>
            table {
                border-collapse: collapse;
            }

            table td, table th {
                border: 1px solid #ddd;
            }
            
            table td {
                text-align: left;
                width: 30%
            }

            table th {
                text-align: center;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>

    <body>
    <table>
        <tbody>
            <tr>
                <th>Input</th>
                <th>Output</th>
            </tr>
            <tr>
                <?php
                    $a = 10;
                    $b = 20;
                    echo "<td>"."Rectangle, a = $a, b = $b"."</td>";
                    $c = $a * $b;
                    echo "<td>"."S = $c "."</td>";
                ?>
            </tr>
            <tr>
                <?php
                    $a = 15;
                    echo "<td>"."Square, a = $a"."</td>";
                    $c = $a * $a;
                    echo "<td>"."S = $c "."</td>";
                ?>
            </tr>
            <tr>
                <?php
                    $a = 10;
                    $b = 15;
                    echo "<td>"."Triangle, a = $a, ha = $b"."</td>";
                    $c = ($a / 2) * $b;
                    echo "<td>"."S = $c "."</td>";
                ?>
            </tr>
            <tr>
                <?php
                    $a = 15;
                    echo "<td>"."Circle, r = $a"."</td>";
                    $c = floor(M_PI * ($a * $a));
                    echo "<td>"."S = $c "."</td>";
                ?>
            </tr>
            </tbody>
        </table>
    </body>

</html>