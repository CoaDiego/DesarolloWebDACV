<?php include 'conexion.php';

$sql = "SELECT id,materia,mes,porcentaje FROM informes";

$resultado = mysqli_query($con, $sql);
?>
    <table border="1">
    <tr>
        <th>Materia</th>
        <th>Mes </th>
        <th>Porcentaje</th>
    </tr>
    <?php while ($fila = mysqli_fetch_array($resultado)) { ?>


        <tr>
            <td><?php echo $fila['materia']; ?></td>
            <td><?php echo $fila['mes']; ?></td>
            <td><?php echo $fila['porcentaje']; ?></td>
        </tr>

    <?php } ?>
