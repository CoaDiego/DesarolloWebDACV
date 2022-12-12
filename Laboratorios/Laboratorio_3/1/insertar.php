<?php include("conexion.php");
$numero=$_POST['numero'];
for ($i=1; $i <= $numero; $i++) 
{

$nombres=$_POST['nombres'.$i];
$apellidos=$_POST['apellidos'.$i];
$cu=$_POST['cu'.$i];
$sexo=$_POST['sexo'.$i];


$sql="insert into alumnos (nombres,apellidos, cu,sexo) values ('$nombres','$apellidos','$cu','$sexo')";
echo "Se insertara Nombre='$nombres'; Apellido:'$apellidos';CU:'$cu'; Sexo:'$sexo' <br>";
$resultado=$con->query($sql);
if ($resultado)
	echo "se registro con exito <br>";
else
	echo "hubo un error";

}
header("location:listar.php");
?>
