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
		$query="SELECT * FROM cita;";

		$consulta=mysqli_query($con,$query);
		
		if($consulta){
			
					  while($fila=mysqli_fetch_assoc($consulta)){
																$arreglo[]=$fila;
																
																}
																
					  
					 
					  echo "<table border=1 class='ventab'>";
					  echo "<tr class='encabezado'>";
					  echo "<th>ID Cita</th>";
					  echo "<th>Fecha</th>";
					  echo "<th>Hora</th>";
					  echo "<th>ID Casa</th>";
					  echo "<th>ID Vendedor</th>";
					  echo "<th>Cliente ID</th>";
					  echo "<th>Opciones</th>";
					  echo "</tr>";
					  foreach($arreglo as $ele){
												

					  
					  
									
									echo"<tr>";
									echo "<form action='actualizarCita.php' onsubmit='return valida(this)' method='POST'>";
												echo"<td><input name='txt_id' type='text' class='inid' value='{$ele['cit_id']}' readonly='readonly'/></td>";
												echo"<td><input name='txt_fecha' type='date' value='{$ele['cit_fecha_cita']}'/></td>";
												echo"<td><input name='txt_hora' type='text' value='{$ele['cit_hora_cita']}'/></td>";
												echo"<td><input name='txt_id_casa' type='text' class='inid' value='{$ele['cit_cas_id']}'/></td>";
												echo"<td><input name='txt_id_vend' type='text' class='inid' value='{$ele['cit_vend_id']}'/></td>";
												echo"<td><input name='txt_id_cli' type='text' class='inid' value='{$ele['cit_cli_id']}'/></td>";
												echo "<td><input type='submit' name='actualizar' value='Actualizar' /></td>";
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