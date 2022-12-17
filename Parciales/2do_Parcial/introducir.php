<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="javascript.js"></script>
</head>

<body>
    
<?php
    $n = $_GET['n'];
    ?>

    <form action="javascript:pregunta1()">

        <input type="hidden" name="n" value="<?php echo $n; ?>">
        <?php
        for ($i = 0; $i < $n; $i++) {
        ?>
            <input type="number" id="n<?php echo $i; ?>"> <br>
        <?php
        }
        ?>
       <button onclick="Sumar()" id="boton">SUMAR</button>

    </form>
</body>

</html>