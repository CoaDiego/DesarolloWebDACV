<?php 
include 'conexion.php';
$sql = "SELECT id,materia,mes,porcentaje FROM informes";
$resultado = mysqli_query($con, $sql);

include("conexion.php");
$materia = array("SIS256", "SIS258", "SIS406");

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

$porcentajes = array($n1, $n2, $n3);

$mesSeleccionado = $_POST["mesSeleccionado"];

for($i=0; $i<3; $i++){
/*     echo "materia.$materia[$i]. : Mes $mesSeleccionado : porcentaje .$porcentajes[$i] "; */

    $sql = "INSERT INTO informes(materia,mes,porcentaje) VALUES('$materia[$i]','$mesSeleccionado','$porcentajes[$i]')";
    mysqli_query($con, $sql);
}
?>
    <table border="1">
    <tr>
        <th>Materia</th>
        <th>Mes </th>
        <th>Porcentaje</th>
    </tr>
    <?php 
    while ($fila = mysqli_fetch_array($resultado)) { ?>

        <tr>
            <td><?php echo $fila['materia']; ?></td>
            <td><?php echo $fila['mes']; ?></td>
            <td><?php echo $fila['porcentaje']; ?></td>
        </tr>

    <?php } ?>
<p>Se inserto con exito</p>


