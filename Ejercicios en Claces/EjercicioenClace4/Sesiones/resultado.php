<?php

session_start();

$n1=$_SESSION['A'];
$n2=$_SESSION['B'];

$operacion= $_GET['operacion'];

if ($operacion == 1 ) {
	
	echo "El resultado sumando es: <br>" .$n1 + $n2;

	}
else 
	{
        echo "El resultado restando es: <br>" .$n1 - $n2; 
	}

?>
