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

    setcookie("A", $_GET["n1"], 0);
    setcookie("B", $_GET["n2"], 0);

?>

<li><a href="resultado.php?operacion=1">Sumar</a></li>
<br>
<li><a href="resultado.php?operacion=2">Restar</a></li>

</body>
</html>