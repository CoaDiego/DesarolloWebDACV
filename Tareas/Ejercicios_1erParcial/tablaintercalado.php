<?php  
    if (isset($_COOKIE["nro_visitas"])) {
       $nro_visitas = $_COOKIE["nro_visitas"];
       $nro_visitas++;
    } else {
        $nro_visitas=1;
    } 
    setcookie("nro_visitas", $nro_visitas, time()+3600);
 ?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="contenedor">

        <div class="encabezado">

            <div class="titulo">
                <div class="universidad">
                    <div class="logo"><img id="logoU" src="images/usfx.png"></div>
                    <div class="uni">
                        <div class="uniColor">Universidad de San Francisco Xavier</div>
                        <br>

                        <div class="facuColor">Facultad de Tecnologia
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span style="color: red ;font-size: 15px;">Sucr<span style="color: yellow;">e-Bol</span><span style="color: green;">ivia</span>
                        </div>
              

                    </div>
                </div>
            </div>

            <div class="datos">
                <div class="carrera">Carrera de Ingenieria de Sistemas</div>
                <div class="semestre">Semestre 2-2022</div>
            </div>
        </div>

        <div class="contenido">
            <div class="menu">
                <ul class="preguntas">
                    <li><a href="maqueta.php">Pregunta 1</a></li>
                    <li><a href="pregunta2.php">Pregunta 2</a></li>
                    <li><a href="pregunta3.php">Pregunta 3</a></li>
                </ul>
            </div>

            <div class="contenidoPrincipal">

            <?php
            $filas = $_GET['filas'];
            $columnas = $_GET['columnas'];
            ?>

            <table>
                <?php
                $primer=array('Viva','Mi','Sucre');
                $segundo=array('Cuna','de','Libertad');
                for ($i = 0; $i < $filas; $i++) {
                ?> <tr>
                        <?php
                        for ($j = 0; $j < $columnas; $j++) {
        
                            if ($j % 2 == 0) {
                                if ($i % 2 == 0) {
                                    echo '<td class="celeste">'.$primer[$i%3].'</td>';
                                }
                                else {
                                    echo '<td class="blanco">'.$primer[$i%3].'</td>';
                                }
                            } else {
                                if ($i % 2 == 0) {
                                    echo '<td class="blanco">'.$segundo[$i%3].'</td>';
        
                                }
                                else    {
                                    echo '<td class="rojo">'.$segundo[$i%3].'</td>';
                                }
                            }
                            
                        }
                        ?>
                    </tr>
                <?php
                }
                ?>
        
        
            </table>
        
               
            </div>
            <div class="menu">
                <ul class="preguntas">
                    <li><a href="pregunta4.php">Pregunta 4</a></li>
                    <li><a href="pregunta5.php">Pregunta 5</a></li>
                    <li><a href="pregunta6.php">Pregunta 6</a></li>
                </ul>
            </div>
        </div>

        <div class="pie">
            <br>
            <td>Alumnno: Coa Veliz Diego Armando</td><br>
            <td>CU: 5632247</td><br>
            <div class="contador">
                 </div class="">
            <?php echo "Numero de visitas al sitio: $nro_visitas vez";?>
        </div>

    </div>
</body>

</html>