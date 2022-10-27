
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
            include("listaAlumnos.php");
            session_start();
            if (!isset($_SESSION['lista'])) {
                $_SESSION['lista'] = new ListaAlumnos();
            }
            $cu = $_POST['cu'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $alumno = new Alumnos($cu, $nombre, $apellido);
            $_SESSION['lista']->Insertaralumno($alumno);
            ?>
            Se inserto correctamente
            <meta http-equiv="refresh" content="3; url=pregunta3.php">
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
                 </div>
            <?php echo "Numero de visitas al sitio: $nro_visitas vez";?>
        </div>

    </div>
</body>

</html>