<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/normalize.css">
    <title>Registrarse</title>
</head>
<body>
<?php include('TOOLS/header.inc'); ?>

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
<br><br><br><br>
    <form id="trofeo" class="trofeo" method="POST" action="insertarDuenio.php" onsubmit="return valida(this)" enctype="multipart/form-data" >
        <fieldset>
        <legend><h2>Registro Dueño</h2></legend>
        <ol>
    
        <li>
            <label for="nombre">Nombre: </label>
            <input  name="txt_nombre" id="nombre"  type="text" maxlength="30" required autofocus>
        </li>
       <li>
            <label  for="telefono">Telefono:</label>
            <input name="txt_telefono" id="telefono" type="text" maxlength="10" placeholder="10 Digitos" required>
        </li>
        <li>
            <label for="email">Correo:</label>
            <input name="txt_email" type="email" id= "email" pattern=".+@.+.com" size="30" required>
        </li>
        <li>
            <label  for="direccion">Dirección:</label><br>
            <textarea name="txt_direccion" id="direccion" style='width:100%;' type="text" maxlength="100" required></textarea>
        </li>
        </ol>
            <button id="enviar" type="submit" class="boton boton-verde d-block">Registrarte</button>
        </fieldset>
    </form>
	<br><br><br><br>
	

	
	
	
<?php include('TOOLS/foter.inc'); ?>
</body>
</html>