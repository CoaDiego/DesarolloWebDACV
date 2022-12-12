<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php
include("conexion.php");
$sql = "SELECT cod_carrera, carrera FROM carreras ";
$resultado=$con->query($sql);
?>


<body>
	<form action="insertar.php" method="POST">
		<table>
			<tr>
				<th>
					Nombre
				</th>
				<th>
					Apellido
				</th>
				<th>
					Sexo
				</th>
				<th>
					CU
				</th>
				<th>
					Carrera
				</th>
			</tr>
			<?php $numero=$_GET['numero'];

	for ($i=1; $i <= $numero ; $i++) { 
			?>
			<tr>
				<td><input type="text" name="nombres<?php echo $i ?>"> </td>
				<td><input type="text" name="apellidos<?php echo $i ?>"> </td>
				<td><input type="radio" name="sexo<?php echo $i ?>" value="M">Masculino
					<input type="radio" name="sexo<?php echo $i ?>" value="F">Femenino
				</td>
				<td><input type="text" name="cu<?php echo $i ?>"> </td>
				<td>
        <select name="carrera">
            <?php while($fila=mysqli_fetch_array($resultado)){ 
                ?>
            <option value="<?php echo $fila['cod_carrera']; ?>"><?php echo $fila['carrera']; ?></option>
            <?php } ?>
        </select>
		
        <br></td>
			</tr>
			<?php
		}	
 	?>

		</table>
		<input type="hidden" name="numero" value="<?php echo $numero ?>">
		<input type="submit" value="registrar">
	</form>


</body>

</html>