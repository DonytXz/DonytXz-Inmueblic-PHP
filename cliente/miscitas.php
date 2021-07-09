<?php
session_start();
$id= $_SESSION["cli_id"];
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
		$query="SELECT * FROM cita where cit_cli_id = '$id'";

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
					  echo "</tr>";
					  foreach($arreglo as $ele){
												

					  
					  
									
									echo"<tr>";
									
												echo"<td>{$ele['cit_id']}</td>";
												echo"<td>{$ele['cit_fecha_cita']}</td>";
												echo"<td>{$ele['cit_hora_cita']}</td>";
												echo"<td>{$ele['cit_cas_id']}</td>";
												echo"<td>{$ele['cit_vend_id']}</td>";
												echo"<td>{$ele['cit_cli_id']}</td>";
												
												
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