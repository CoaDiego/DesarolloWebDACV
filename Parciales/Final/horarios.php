<?php include 'conexion.php';

$sql = "SELECT id,materia,dia,hora FROM horarios";

$resultado = mysqli_query($con, $sql);
?>
<table border="1">
    <tr>
        <th>Hora</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>

    </tr>
    <?php while ($fila = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <!-- td><?php echo $fila['1']; ?></td>
            <td><?php echo $fila['2']; ?></td>
            <td><?php echo $fila['3']; ?></td> -->
        </tr>
    <?php } ?>