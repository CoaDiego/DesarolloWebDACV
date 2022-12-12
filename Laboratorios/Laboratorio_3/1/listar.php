<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
</head>

<body>

	<?php include("conexion.php");

$sql="select nombres,apellidos,cu,cod_carrera sexo from alumnos";

$resultado=$con->query($sql);
?>
	<table with="100%">
		<tr>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Sexo</th>
			<th>CU</th>
			<th>Carera</th>
		</tr>

		<?php $o=0;
		while ($fila=$resultado->fetch_assoc())
		{
			?>
		<tr style="background-color:<?php 
				if ($o%2==0) 
				?>">
			<td>
				<?php echo $fila['nombres'];?>
			</td>
			<td>
				<?php echo $fila['apellidos'];?>
			</td>
			<td>
				<?php switch ($fila['sexo']) 
		{case "M":
			echo "Masculino";
			break;
		case "F":
			echo "Femenino";
			break;
		}?>
			</td>
			<td>
				<?php echo $fila['cu'];?>
			</td>
			<td>
				<?php echo $fila['cod_carrera'];?>
			</td>
			
		</tr>
		<?php 
		$o++;
		}
		?>
	</table>
</body>

</html>