<?php
session_start();
$id= $_SESSION["due_id"];
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
		$query="SELECT * FROM casa where cas_due_id = '$id'";

		$consulta=mysqli_query($con,$query);
		
		if($consulta){
			
					  while($fila=mysqli_fetch_assoc($consulta)){
																$arreglo[]=$fila;
																
																}

					  echo "<table border=1 class='ventab'>";
					  echo "<tr class='encabezado'>";
					  echo "<th>ID Casa</th>";
					  echo "<th>Fecha registro</th>";
					  echo "<th>Estatus</th>";
					  echo "<th>Direccion</th>";
					  echo "<th>M2</th>";
					  echo "<th>Precio</th>";
					  echo "<th>Descripcion</th>";
					  echo "<th>Foto</th>";
					  echo "<th>Fecha venta</th>";
					  echo "<th>ID Dueño</th>";
					  echo "</tr>";
					  foreach($arreglo as $ele){
												

					  
					  
									
									echo"<tr>";
									
												echo"<td>{$ele['cas_id']}</td>";
												echo"<td>{$ele['cas_fecha_registro']}</td>";
												echo"<td>{$ele['cas_estatus']}</td>";
												echo"<td>{$ele['cas_direccion']}</td>";
												echo"<td>{$ele['cas_metros2']}</td>";
												echo"<td>{$ele['cas_precio']}</td>";
												echo"<td>{$ele['cas_descripcion']}</td>";
												echo"<td><a href='../IMG/{$ele['cas_foto']}'' target='_blank' ><img src='../IMG/{$ele['cas_foto']}' /></a></td>";
												echo"<td>{$ele['cas_fecha_venta']}</td>";
												echo"<td>{$ele['cas_due_id']}</td>";
												
												
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