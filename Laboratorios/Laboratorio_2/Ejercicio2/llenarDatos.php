<?php session_start();
include("operaciones.php");
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];

$_SESSION['operacion']= new Operaciones($a,$b,$c);

?>
<meta http-equiv="refresh" content="3;URL=menu.html">  