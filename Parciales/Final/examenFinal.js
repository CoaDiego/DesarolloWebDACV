function seleccionado() {

}

function pregunta2() {
    document.getElementById('titulo').innerHTML = 'Lista'
    html = "";
    html += '<form action="javascript:listaCuadros()" method="GET"><label for="n">Numero Cuadros<br><br></label><input type="number" id="n"><br><br><input type="submit" value="Obtener" onclick="listaCuadros">';
    document.getElementById("cuadroContenido").innerHTML = html;
}


function listaCuadros() {
    var n = document.getElementById("n").value;
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "lista.php?n=" + n, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("cuadroContenido").innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}


function pregunta3() {
    document.getElementById('titulo').innerHTML = "Horario SIS256";
    var contenido = document.getElementById('contenido');

    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest()
    ajax.open("get", "horarios.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function pregunta4() {
    document.getElementById('titulo').innerHTML = "Calificaciones";

    var contenido = document.getElementById('contenido');
    fetch("editarcalificaciones.php")
        .then(response => response.text())
        .then(data => contenido.innerHTML = data)
        .catch(error => console.log(error));
}

function pregunta5() {
    document.getElementById('titulo').innerHTML = "Informes";

    var contenido = document.getElementById('contenido');
    fetch("formularioinforme.php")
        .then(response => response.text())
        .then(data => contenido.innerHTML = data)
        .catch(error => console.log(error));
}


function insertar() {
    var ajax = new XMLHttpRequest()
    ajax.open("POST", "insertar.php", true)
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById('contenido').innerHTML = ajax.responseText
        }
    }
    var datos = new FormData();
    datos.append("mesSeleccionado", document.getElementById("mesSeleccionado").value);
    datos.append("n1", document.getElementById("n1").value);
    datos.append("n2", document.getElementById("n2").value);
    datos.append("n3", document.getElementById("n3").value);
    ajax.send(datos);
}


function mostrarInforme() {
    var contenido = document.getElementById('contenido');
    fetch("listaInforme.php")
        .then(response => response.text())
        .then(data => contenido.innerHTML = data)
        .catch(error => console.log(error));
}