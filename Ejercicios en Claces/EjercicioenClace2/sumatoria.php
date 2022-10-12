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
    echo "Sumatoria de n <br>";

    $n =3;
    $sum= 0;

    echo "n: $n<br>";

    for ($i=0; $i <=$n ; $i++) { 
        $sum= $sum + $i; 
    }

    echo "La sumatoria es: $sum<br>";


    ?> 
</body>
</html>