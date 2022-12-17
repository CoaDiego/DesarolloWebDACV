function pregunta1() {
    document.getElementById('titulo').innerHTML = "Estudiante:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CU :  ";
}

function pregunta2() {
    document.getElementById('titulo').innerHTML = "Pregunta 2 DOM en Javascrip";
    html = "";
    html += `<input type="button" id="boton" onclick=" cambiar()" value="Modo blanco y negro">`;
    document.getElementById('contenido').innerHTML = html;
}

function cambiar() {
    /* seccion = ["menu", "titulo", "contenido", "resultado", "mensaje"]
    n = 4; */

    /* for(i=0; i<n; i++){
        document.getElementById(seccion[i]).style.backgroundColor = 'black';
    } */
    /* seccion = 'menu'; */
    /*  var seccion = document.getElementById('seccion'); */
    /* var color = document.getElementById('border: 5px solid black'); */
     /* document.getElementById('menu').style.backgroundColor = 'black';  */
     document.getElementById('titulo').style.backgroundColor = 'white'; 
     document.getElementById('contenido').style.backgroundColor = 'white'; 
     document.getElementById('resultado').style.backgroundColor = 'white'; 
     document.getElementById('mensaje').style.backgroundColor = 'white'; 


     document.getElementById('titulo').style.color = 'black'; 
     document.getElementById('contenido').style.bcolor = 'black'; 
     document.getElementById('resultado').style.color = 'black'; 
     document.getElementById('mensaje').style.color = 'black'; 



     document.getElementById('titulo').style.border= '5px solid black'; 
     document.getElementById('contenido').style.border = '5px solid black'; 
     document.getElementById('resultado').style.border = '5px solid black'; 
     document.getElementById('mensaje').style.border = '5px solid black'; 

     document.getElementById('menu').style.backgroundColor = 'rgb(119, 109, 106)'; 
     document.getElementById('menu').style.border = '5px solid black'; 
}


function pregunta3() {
    document.getElementById('titulo').innerHTML = "Pregunta 3 Insertar en Ajax";
    html = "";
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest()
    ajax.open("get", "formInsertar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}


function insertar() {
    var ajax = new XMLHttpRequest()
    ajax.open("POST", "insertar.php", true)
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById('mensaje').innerHTML = ajax.responseText
        }
    }
    var datos = new FormData();
    datos.append("imagen", document.getElementById("imagen").files[0]);
    datos.append("titulo", document.getElementById("titulolibro").value);
    datos.append("autor", document.getElementById("autor").value);
    datos.append("editorial", document.getElementById("editorial").value);
    datos.append("anio", document.getElementById("anio").value);
    datos.append("usuario", document.getElementById("usuario").value);
    datos.append("carrera", document.getElementById("carrera").value);
    ajax.send(datos);
}

function pregunta4() {
    var titulo = document.getElementById('contenido');
    fetch("listar.php")
        .then(response => response.text())
        .then(data => titulo.innerHTML = data)
        .catch(error => console.log(error));
}

function pregunta5() {
    document.getElementById('titulo').innerHTML = "Pregunta 5";
    html = "";
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest()
    ajax.open("get", "formN.html", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cuadros() {
    document.getElementById('titulo').innerHTML = "Pregunta 5";
    html = "";
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest()
    ajax.open("get", "introducir.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}



function llamar() {
    document.getElementById('titulo').innerHTML = "Pregunta 5";
    html = "";
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest()
    ajax.open("get", "introducir.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

/* function crearcuadros() {
    n = document.getElementById("numero_cuadros").value;
    html = "";
    for (var i = 0; i < n; i++) {
        html += "<input type='number' id='c" + i + "'><br><br>";
    }
    html += "<button onclick='Sumar()'>Sumar</button>";
    document.getElementById("contenido").innerHTML = html;
} */

/* function Sumar() {

    var resultado = 0;
    for (var i = 0; i < n; i++) {
        c = document.getElementById("c" + i).value
        num = parseInt(c);
        resultado = resultado + num;
        console.log(resultado)
    }
    document.getElementById("resultado").innerHTML = "<h1>" + resultado + "</h1>";
} */