<?php include 'conexion.php';

$sql = "SELECT id,materia, nombres_apellidos,calificacion FROM alumnos";

$resultado = mysqli_query($con, $sql);
?>
<table border="1">
    <tr>
        <th>Numero</th>
        <th>Nombres y Apellidos</th>
        <th>Calificacion</th>
    </tr>
    <?php 
    while ($fila = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><?php echo $fila['1']; ?></td>
            <td><?php echo $fila['nombres_apellidos']; ?></td>
            <td><?php echo $fila['calificacion']; ?></td>
        </tr>
    <?php } ?>