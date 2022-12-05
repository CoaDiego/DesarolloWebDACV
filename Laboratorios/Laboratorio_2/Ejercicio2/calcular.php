
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>La suma es:</h1>
    <?php include("operaciones.php");
    session_start();

    echo $_SESSION['operacion']->CalcularSuma(); 
    ?> <br>
    <h3>El mayor es:</h1>
    <?php 

    echo $_SESSION['operacion']->CalcularMayor();
    ?>

<meta http-equiv="refresh" content="3;URL=menu.html"> 

</body>
</html>

 