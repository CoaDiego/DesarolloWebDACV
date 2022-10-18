<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $filas = $_GET["f"];
    $columnas = $_GET["c"];

    echo'<table>';

    $contador = 1;

    for($i = 1; $i <= $filas; $i++){
        
        echo"<tr>";
        
        for($j =1; $j <= $columnas; $j++) {

            echo"<td>".$contador."</td>";

            $contador++;
        }
    
        echo"</tr>";
    }
    echo'</table>';
    ?>

</body>
</html>