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
 
 if(/^\s+|\s+$/.test(f.txt_direccion.value)) {
		alert("Escriba un nickname por favor");
		return false;
			}
			
if(ok == false){
  return ok;
  }
}
</script>
<div class="principal">
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
		$query="SELECT * FROM duenio;";
		$consulta=mysqli_query($con,$query);
		
		if($consulta){
			
					  while($fila=mysqli_fetch_assoc($consulta)){
																$arreglo[]=$fila;
																
																}
																
					  
					  
					  echo '<table border=1 class="ventab">';
					  echo "<tr class='encabezado'>";
					  echo "<th>Duenio ID</th>";
					  echo "<th>Nombre</th>";
					  echo "<th>Telefono</th>";
					  echo "<th>Email</th>";
					  echo "<th>Dirección</th>";
					  echo "<th>Opciones</th>";
					  echo "</tr>";
					  foreach($arreglo as $ele){

									echo"<tr>";
									echo "<form action='actualizarDuenio.php' onsubmit='return valida(this)'  method='POST'>";
												echo"<td><input name='txt_id' class='inid' type='number' value='{$ele['due_id']}' readonly='readonly'/> </td>";
												echo"<td><input name='txt_nombre' type='text' value='{$ele['due_nombre']}' /> </td>";
												echo"<td><input name='txt_telefono' type='text'min='1' maxlength='10'  value='{$ele['due_telefono']}' /> </td>";
												echo"<td><input name='txt_email' type='email' pattern='.+@.+.com' value='{$ele['due_email']}' /> </td>";
												echo"<td><input name='txt_direccion' type='text' value='{$ele['due_direccion']}' /> </td>";
												echo "<td><input type='submit' name='actualizar' value='Actualizar' /></td>";
												echo "</form>";
									echo"</tr>";					  

							}
						echo"</table>";					  
					  	echo"</div>";								
		
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