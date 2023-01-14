<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="javascript:insertar()" method="POST" enctype="multipart/form-data" id="form-persona">
        <label for="mes" id="mes">Mes</label>
          <select name="mesSeleccionado" id="mesSeleccionado">
          <option>Enero</option>
          <option>Febrero</option>
          <option>Marzo</option>
          <option>Abril</option>
          <option>Mayo</option>
          <option>Junio</option>
          <option>Julio</option>
          <option>Agosto</option>
          <option>Septiembre</option>
          <option>Noviembre</option>
          <option>Diciembre</option>
          </select> <br><br>

          <label>SIS256</label>
          <input type="number" name="n1" id="n1"> <br>
          <label>SIS258</label>
          <input type="number" name="n2" id="n2"><br>
          <label>SIS406</label>
          <input type="number" name="n3" id="n3"><br><br>

          <input type="submit" value="Registrar">
    </form>
          
</body>
</html>