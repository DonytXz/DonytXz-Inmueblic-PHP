<?php
session_start();
$id= $_SESSION["due_id"];
$dnm= $_SESSION["due_nombre"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/normalize.css">
    <title>Registrarse</title>
</head>
<body>
<?php include('header.inc');  echo "<h1 align='center'>Bienvenido: $dnm </h1>"; ?>

<script type="text/javascript">
function valida(f) {
  var ok = true;
  
  if(/^\s+|\s+$/.test(f.nombre.value)) {
		alert("Escriba un nombre por favor");
		return false;
			}

 if (!/^([0-9])*$/.test(f.telefono.value)){
      alert("Ingrese un numero de telefono valido");
	  return false;
  }else if(f.telefono.value ==0){
	 alert("Ingrese un numero de telefono valido");
	 return false;
 }else if (f.telefono.value.length!=10){
	 alert("Ingrese un numero de telefono valido");
	 return false;
 }
 
 if(/^\s+|\s+$/.test(f.nickname.value)) {
		alert("Escriba un nickname por favor");
		return false;
			}
			
if(ok == false){
  return ok;
  }
}


</script>
<br><br>
    <form id="trofeo" class="trofeo" method="POST" action="insertarCasa.php" onsubmit="return valida(this)" enctype="multipart/form-data" >
        <fieldset>
        <legend><h2>Registro de Casa</h2></legend>
        <ol>
    
        <li>
            <label for="fecha">Fecha: </label>
            <input  name="txt_fecha" id="fecha"  type="date" required autofocus>
        </li>
       <li>
            <label  for="estatus">Estatus:</label>
            <input name="txt_estatus" id="estatus" value="1" type="text" maxlength="10" readonly="readonly" required>
        </li>
        <li>
            <label  for="direccion">Dirección:</label>
            <textarea name="txt_direccion" id="direccion" style="width:100%;" type="text" maxlength="100" required></textarea>
        </li>
        <li>
            <label for="m2">M2:</label>
            <input name="txt_m2" type="text" id= "m2" placeholder="Metros Cuadrados" size="30" required>
        </li>
        <li>
            <label  for="precio">Precio:</label>
            <input id="precio" name="txt_precio" type="text" maxlength="30" required>
        </li>
		<li>
            <label  for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="txt_descripcion" type="text" maxlength="300" style="width:100%;" required></textarea>
        </li>
		<li>
            <label  for="foto">Foto:</label>
            <input id="foto" name="txt_foto" type="file" required>
        </li>
		<li>
            <label  for="duenio">Dueño ID:</label>
            <input id="duenio" name="txt_duenio" type="text" maxlength="3" value="<?php echo $id; ?>" required readonly="readonly" />
        </li>
		
        </ol>
            <button id="enviar" name="enviar" type="submit" class="boton boton-verde d-block">Registrar Casa</button>
        </fieldset>
    </form>
	<br><br>
	
</body>
</html>