<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/normalize.css">
    <title>Inmueblic</title>
</head>
<body>


<script type="text/javascript">
function valida(f) {
  var ok = true;
  
  if(/^\s+|\s+$/.test(f.password.value)) {
		alert("Escriba una contraseña por favor");
		return false;
			}
			
if(ok == false){
  return ok;
  }
}


</script>
<br><br>
<a href="../index.php" style="text-decoration:none;">
<h2 align="center" style="color:#fff;">Inicio</h2>
</a>
<br><br>
    <form id="trofeo" class="trofeo" method="POST" action="index.php" onsubmit="return valida(this)" enctype="multipart/form-data" >
        <fieldset>
        <legend><h2>Login</h2></legend>
        <ol>
        <li>
            <label for="email">Correo:</label>
            <input name="txt_email" type="email" id= "email" pattern=".+@.+.com" size="30" required>
        </li>
        <li>
            <label  for="password">Contraseña:</label>
            <input id="password" name="txt_password" type="password" maxlength="30" required>
        </li>
        </ol>
            <button id="enviar" type="submit" class="boton boton-verde d-block">Entrar</button>
        </fieldset>
    </form>
	<br><br>
	<a href="../registrarse.php" style="text-decoration:none;">
<h2 align="center" style="color:#5E9ABF;">Quiero registrarme</h2>
</a>
	<br><br>
	
</body>
</html>