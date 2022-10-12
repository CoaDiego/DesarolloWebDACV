<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $n1=0;
    $n2=1;
    $n3;

    $n=11; 

        echo "<br>". $n2 . "\n <br>"; 
    for ($i=1; $i <=$n-1 ; $i++) { 
        $n3= $n1+$n2;
        $n1= $n2;
        $n2= $n3;

        echo $n3 . "\n <br>";
    }

    echo "El Fibonacci de $n es $n3";


    ?>    
</body>
</html>