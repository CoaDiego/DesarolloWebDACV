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
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <p class="rojo">SUCR</p>
                            <p class="amarillo">E-BOL</p>
                            <P class="verde">IVIA</P>
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
                </ul>
            </div>
            <div class="contenidoPrincipal">
                Primer Examen de Programacion Internet Intranet
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur laborum impedit ducimus repudiandae
                maiores dolores, odio voluptas aliquid quae sunt quisquam quaerat debitis dolorum non voluptatum modi
                eius provident placeat!
            </div>
            <div class="menu">
                <ul class="preguntas">
                    <li><a href="">Pregunta 3</a></li>
                    <li><a href="">Pregunta 4</a></li>
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