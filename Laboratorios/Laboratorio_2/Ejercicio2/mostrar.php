<?php 
include("operaciones.php");
session_start();

echo $_SESSION['operacion']->MostrarCalculos(); 

?>
<meta http-equiv="refresh" content="3; url=menu.html">