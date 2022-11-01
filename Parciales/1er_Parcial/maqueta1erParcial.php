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
                <div class="logo"><img id="imagen" src="images/usfx.png"></div>
                <div class="Uni">
                    <div class="universidad">Universidad de San Francisco Xavier</div>
                    <div class="facultad">Facultad de Tecnologia
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span style="color: red ;font-size: 15px;text-shadow: black 0.1em 0.1em 0.2em;">Sucr<span
                                style="color: rgb(255, 255, 0) ;">e-Bol</span><span style="color: green;">ivia</span>
                    </div>
                </div>
                <div class="logo2"><img id="imagen2" src="images/tecnologia.png"></div>
            </div>

        </div>

        <div class="info">
            Carreras: Ing. de Sistemas, Ing. en Ciencias de la Computacion <br>
            Semestre 2-2022
        </div>

        <div class="letras">
            <div class="item" id="amarillo">A</div>
            <div class="itemB"> &nbsp;</div>
            <div class="item">B</div>
            <div class="itemB"> &nbsp;</div>
            <div class="item">C</div>
            <div class="itemB"> &nbsp;</div>
            <div class="item">D</div>
            <div class="itemB"> &nbsp;</div>
            <div class="item">E</div>
            <div class="itemB"> &nbsp;</div>

        </div>



        <div class="informacion">

            <div class="menuIzquierda">
                <ul class="incisos">
                    <li><a href="maqueta1erParcial.php">Inicio</a></li>
                    <li><a href="pregunta2.php">Pregunta 2</a></li>
                    <li><a href="pregunta3.html">Pregunta 3</a></li>

                    <li><a href="pregunta4.html">Pregunt 4</a></li>
                </ul>
                <div class="enblanco">&nbsp;&nbsp;</div>
            </div>

            <div class="contenido">
                Bienvenido al Primer parcial
            </div>

            <div class="info_derecha">
                <div class="info1">
                     Alumno: <br>
                Diego Armando <br>
                 Coa Veliz <br>
                <br>
                Ingenieria de Sistemas <br>
                ___________________ <br>
                </div>
                <div class="imagen2"> <br> Imagen <br>
                    <img src="images/estudiante.png" id="imgEstudiante">
                </div>
            </div>
        </div>

        <div class="contadorMensaje">
            <div class="c1">  Usted Ingreso a esta Pagina:</div>
            <div class="c2">   <?php echo  $nro_visitas ?></div>
            <div class="c3">  Veces</div>
           
        </div>


        <div class="pie">
            Año - 2022
        </div>
    </div>
</body>

</html>