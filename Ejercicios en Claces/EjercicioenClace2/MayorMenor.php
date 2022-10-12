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
    echo "Mayor, Menor <br>";

    $a =3;
    $b = 2;
    $c = 4;

    echo "a: $a<br>";
    echo "b: $b<br>";
    echo "c: $c<br>";

    echo "Calcular Mayor <br>";

    if ($a>$b and $a>$c) {
        echo "$a es Mayor que $b y $c";
        $menor=$a;
    }else if ($b>$a and $b>$c) {
        echo "$b es Mayor que $a y $c";
        $menor=$b;
    }
    else  {
        echo "$c es Mayor que $a y $b <br>";
    }

    echo "Calcular Menor <br>";

    if ($a<$b and $a<$c) {
        echo "$a es menor que $b y $c";
        $menor=$a;
    }else if ($b<$a and $b<$c) {
        echo "$b es menor que $a y $c";
        $menor=$b;
    }
    else  {
        echo "$c es menor que $a y $b";
    }
    ?> 

</body>
</html>