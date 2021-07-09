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
		$query="SELECT * FROM vendedor where vend_estatus=1;";
		$consulta=mysqli_query($con,$query);
		
		if($consulta){
			
					  while($fila=mysqli_fetch_assoc($consulta)){
																$arreglo[]=$fila;
																
																}
																
					  
					  
					  echo '<h1>Vendedores activos</h1>';
					  echo '<table border=1 class="ventab">';
					  echo "<tr class='encabezado'>";
					  echo "<th>Vendedor ID</th>";
					  echo "<th>Fecha de registro</th>";
					  echo "<th>Nombre</th>";
					  echo "<th>Telefono</th>";
					  echo "<th>Email</th>";
					  echo "<th>Direccion</th>";
					  echo "<th>Estatus</th>";
					  echo "</tr>";
					  foreach($arreglo as $ele){
												

					  
					  
									
									echo"<tr>";
												echo"<td>{$ele['vend_id']}</td>";
												echo"<td>{$ele['vend_fecha_registro']}</td>";
												echo"<td>{$ele['vend_nombre']}</td>";
												echo"<td>{$ele['vend_telefono']}</td>";
												echo"<td>{$ele['vend_email']}</td>";
												echo"<td>{$ele['vend_direccion']}</td>";
												echo"<td>{$ele['vend_estatus']}</td>";
									echo"</tr>";					  

							}
						echo"</table>";					  
					  							
		
		}else{
				echo"Error en la consulta";
			 }
}else{
	 echo "Error en la base de datos";
	 }
//otra tabla

if($con){
		$query2="SELECT * FROM vendedor where vend_estatus=0;";
		$consulta2=mysqli_query($con,$query2);
		
		if($consulta2){
			
					  while($fila2=mysqli_fetch_assoc($consulta2)){
																$arreglo2[]=$fila2;
																
																}
																
					  
					  echo '<br><br><br><br>';
					  echo '<h1>Vendedores inactivos</h1>';
					  echo '<table border=1 class="ventab">';
					  echo "<tr class='encabezado'>";
					  echo "<th>Vendedor ID</th>";
					  echo "<th>Fecha de registro</th>";
					  echo "<th>Nombre</th>";
					  echo "<th>Telefono</th>";
					  echo "<th>Email</th>";
					  echo "<th>Direccion</th>";
					  echo "<th>Estatus</th>";
					  echo "</tr>";
					  foreach($arreglo2 as $ele2){
												

					  
					  
									
									echo"<tr>";
												echo"<td>{$ele2['vend_id']}</td>";
												echo"<td>{$ele2['vend_fecha_registro']}</td>";
												echo"<td>{$ele2['vend_nombre']}</td>";
												echo"<td>{$ele2['vend_telefono']}</td>";
												echo"<td>{$ele2['vend_email']}</td>";
												echo"<td>{$ele2['vend_direccion']}</td>";
												echo"<td>{$ele2['vend_estatus']}</td>";
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