<?php include 'conexion.php';

$sql = "SELECT id,materia,fotografia,nombres_apellidos FROM alumnos";

$resultado = mysqli_query($con, $sql);
?>
    <table border="1">
    <tr>
        <th>Imagen</th>
        <th>Nombres <br> Apellidos </th>
       <?php
        $numero = $_GET["n"];
        for($i=0; $i<$numero; $i++){
            $n=$i+1;
        ?>
        <th>Cuadro <?php echo"$n"?> </th>
        <?php
        }
        ?>

    </tr>
    <?php while ($fila = mysqli_fetch_array($resultado)) { ?>


        <tr>
            <td><img src="images/<?php echo $fila['fotografia']; ?>" alt="" width="100px"></td>
            <td><?php echo $fila['nombres_apellidos']; ?></td>
            <!-- <td><?php echo $fila['']; ?></td>
            <td><?php echo $fila['']; ?></td> -->
        </tr>

    <?php } ?>
