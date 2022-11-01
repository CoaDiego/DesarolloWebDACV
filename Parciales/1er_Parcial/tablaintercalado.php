<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
</body>
</html>
<?php
$filas = $_GET['filas'];
$columnas = $_GET['columnas'];
?>

<table>
    <?php

    $primer=array('Viva','Mi','Sucre');

    $segundo=array('Cuna','de','Libertad');

    for ($i = 0; $i < $filas; $i++) {
    ?> <tr>
            <?php
            for ($j = 0; $j < $columnas; $j++) {
        
                if ($j % 2 == 0) {
                    if ($i % 2 == 0) {
                        echo '<td class="celeste">'.$primer[$i%3].'</td>';
                    }
                    else {
                        echo '<td class="blanco">'.$primer[$i%3].'</td>';
                    }
                } else {
                    if ($i % 2 == 0) {
                        echo '<td class="blanco">'.$segundo[$i%3].'</td>';
        
                    }
                    else    {
                        echo '<td class="rojo">'.$segundo[$i%3].'</td>';
                    }
                }
                
            }
            ?>
        </tr>
    <?php
    }
    ?>
        
        
</table>