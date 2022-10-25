<?php

$n1=$_COOKIE['A'];
$n2=$_COOKIE['B'];

$operacion= $_GET['operacion'];

if ($operacion == 1 ) {
	
	echo "El resultado sumando es: <br>" .$n1 + $n2;

	}
else 
	{
        echo "El resultado restando es: <br>" .$n1 - $n2; 
	}

?>
