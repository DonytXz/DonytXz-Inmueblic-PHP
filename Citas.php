<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Cita</title>
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/normalize.css">
</head>
<body>

  <form id="trofeo" class="trofeo">
    <fieldset>
    <legend><h2>Datos de los Premios</h2></legend>
    <ol>
    <li>
      <label for="idpremio">No.Premio</label>
      <input id="idpremio" name="idpremio" type="number" placeholder="Ejemplo: 123" required autofocus>
    </li>
    <li>
      <label for="nombre">Nombre del Trofeo</label>
      <input id="nombre" name="nombre" type="text" placeholder="Ejemplo: Champions Cup " required autofocus>
    </li>
    <li>
      <label for="tipo">Tipo de Premio</label>
      <input id="tipo" name="tipo" type="text"  placeholder="Ejemplo: Oro, Plata o Bronce" required autofocus>
    </li>
      <li>
      <label for="nombre">Lugar</label>
      <input id="nombre" name="nombre" type="text" placeholder="Ejemplo: 1er lugar, 2do lugar" required autofocus>
    </li>
    <li>
      <label for="nombre">Color</label>
      <input id="nombre" name="nombre" type="text" placeholder="Ejemplo: Azul, Rojo, etc" required autofocus>
    </li>
    <li>
      <label for="nombre">Costo</label>
      <input id="nombre" name="nombre" type="number" placeholder="Ejemplo: 5000" required autofocus>
    </li>
    <li>
      <label for="fecha">Fecha de Creacion</label>
      <input id="fecha" name="fecha" type="date" required>
    </li>
    <li>
      <label for="fecha">Fecha de Entrega</label>
      <input id="fecha" name="fecha" type="date" required>
    </li>
    </ol>
    <a href="../publicaciones.php" class="boton boton-verde d-block">Guardar Datos</a>
  </fieldset>
  </form>

</body>
</html>



