<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<div class="contenido">
        <table border="1px solid black">
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
            </tr>
    <?php
include("conexion.php");
$sql = "SELECT imagen,titulo from libros ";


$consulta = mysqli_query($con, $sql);

/* while ($fila = mysqli_fetch_array($consulta)) { */
?>
    
            <?php

            for($i=0; $i<2; $i++){
                $fila = mysqli_fetch_array($consulta)

            
    ?>
            <tr>
                <td>
                <img src="images/<?php echo $fila["imagen"]; ?>" alt="<?php echo $fila["titulo"]; ?>" class="img-libro">
                </td>

                <td>
                    <?php echo $fila["titulo"]; ?>
                </td>
            </tr>
            <?php } ?>
        </table>
        <!-- <img src="images/<?php echo $fila["imagen"]; ?>" alt="<?php echo $fila["titulo"]; ?>" class="img-libro">
        <div style="display:inline-block"><?php echo $fila["titulo"]; ?></div> -->
    </div>

</body>

</html>