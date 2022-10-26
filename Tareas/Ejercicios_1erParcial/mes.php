<?php 
$n=$_GET['n'];
$mes = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre" , "diciembre");

// echo count($mes);
echo '<select  name="fibo" >';
$fib1=0;
$fib2=1;
$fibonaci=$fib1+$fib2;
echo '<option value="0" >0</option>';
for ($i=0; $i < $n; $i++) { 
    
    if ($i==$n-1)
    {
        echo '<option value="'.$i.'" selected>'.$mes[$i].'</option>';
    }
    
}
echo '</select>';
?>
