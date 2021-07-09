<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<title>Inmueblic</title>
<link href="../css/estilos.css" type="text/css" rel="stylesheet" />
<link href="../css/pop.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/normalize.css">
</head>
<body>
<?php include('header.inc'); ?>
<div class="principal">
<script type="text/javascript">
function valida(f) {
  var ok = true;
  
  if(/^\s+|\s+$/.test(f.txt_nombre.value)) {
		alert("Escriba un nombre por favor");
		return false;
			}

 if (!/^([0-9])*$/.test(f.txt_telefono.value)){
      alert("Ingrese un numero de telefono valido");
	  return false;
  }else if(f.txt_telefono.value ==0){
	 alert("Ingrese un numero de telefono valido");
	 return false;
 }else if (f.txt_telefono.value.length!=10){
	 alert("Ingrese un numero de telefono valido");
	 return false;
 }
 
 if(/^\s+|\s+$/.test(f.txt_nickname.value)) {
		alert("Escriba un nickname por favor");
		return false;
			}
			
if(ok == false){
  return ok;
  }
}


</script>


<?php
include("../config1.php");

$con=@mysqli_connect($HOST,$USER,$PASS,$BD);
$con -> set_charset("utf8");
if($con){
		//echo "Connexion con servidor exitosa <br>";
		}else{
			  echo "error en la conexion";
		}

if($con){
		$query="SELECT * FROM cliente;";
		$consulta=mysqli_query($con,$query);
		
		if($consulta){
			
					  while($fila=mysqli_fetch_assoc($consulta)){
																$arreglo[]=$fila;
																
																}
																
					  
					 
					  echo '<table border=1 class="ventab">';
					  echo "<tr class='encabezado'>";
					  echo "<th>Cliente ID</th>";
					  echo "<th>Nombre</th>";
					  echo "<th>Telefono</th>";
					  echo "<th>Nickname</th>";
					  echo "<th>Email</th>";
					  echo "<th>Password</th>";
					  echo "<th>Opciones</th>";
					  echo "</tr>";
					  foreach($arreglo as $ele){
												

					  
					  
									
									echo"<tr>"; 
									echo "<form action='actualizarCliente.php' onsubmit='return valida(this)'  method='POST'>";
												echo"<td><input name='txt_id' type='number' class='inid' value='{$ele['cli_id']}' readonly='readonly' /></td>";
												echo"<td><input name='txt_nombre' type='text' value='{$ele['cli_nombre']}' maxlength='30' /></td>";
												echo"<td><input name='txt_telefono' type='text' min='1' maxlength='10' value='{$ele['cli_telefono']}' /></td>";
												echo"<td><input name='txt_nickname' type='text' value='{$ele['cli_nickname']}' maxlength='30' /></td>";
												echo"<td><input name='txt_email' type='email' pattern='.+@.+.com' value='{$ele['cli_email']}' maxlength='30' /></td>";
												echo"<td><input name='txt_pass' type='password' value='{$ele['cli_password']}' maxlength='30' /></td>";
												echo "<td><input type='submit' value='Actualizar' /></td>";
												echo "</form>";
									echo"</tr>";					  

							}
						echo"</table>";
		
		}else{
				echo"Error en la consulta";
			 }
}else{
	 echo "Error en la base de datos";
	 }
?>



</div>
</body>
</html>