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
		$query="SELECT * FROM casa c join venta v on c.cas_id = v.vent_cas_id where c.cas_estatus = 0;";
		$consulta=mysqli_query($con,$query);
		
		if($consulta){
					  //echo"consulta exitosa";
					  while($fila=mysqli_fetch_assoc($consulta)){
																$arreglo[]=$fila;
																}
					  
					  foreach($arreglo as $ele){
												
						  echo '<div class="casa">';
												echo"<img src='../IMG/{$ele['cas_foto']}' align='left'/>";
												echo"<p class='precio'> <b>$ {$ele['cas_precio']} MXN </b></p>";
												echo"<p class='fecha'> &nbsp; Fecha de publicación: {$ele['cas_fecha_registro']}</p><br>";
												echo"<p class='descripcion'> &nbsp; {$ele['cas_descripcion']}</p><br>";
												echo"<p class='m2'> &nbsp; <b>{$ele['cas_metros2']} metros cuadrados</b></p>";
												echo"<p class='direccion'> &nbsp; Dirección: {$ele['cas_direccion']}</p>";
												echo"<p class='idcasa'> &nbsp; <b>Clave: {$ele['cas_id']}</b></p>";

					  
					  echo '<table border=1 class="ventab">';
					  echo "<tr class='encabezado'>";
					  echo "<th>ID Venta</th>";
					  echo "<th>Fecha</th>";
					  echo"<th>Tipo de pago</th>";
					  echo"<th>Total</th>";
					  echo"<th>Comision</th>";
					  echo"<th>Clave casa</th>";
					  echo"<th>Clave cliente</th>";
					  echo"<th>Clave vendedor</th>";
					  echo"</tr>";
									
									echo"<tr>";
												echo"<td>{$ele['vent_id']}</td>";
												echo"<td>{$ele['vent_fecha']}</td>";
												echo"<td>{$ele['vent_tipo_pago']}</td>";
												echo"<td>{$ele['vent_total']}</td>";
												echo"<td>{$ele['vent_comision']}</td>";
												echo"<td>{$ele['vent_cas_id']}</td>";
												echo"<td>{$ele['vent_cli_id']}</td>";
												echo"<td>{$ele['vent_vend_id']}</td>";
									echo"</tr>";					  
					  echo"</table>";					  
					  echo "<br><br>";
								echo"</div>";								
							}
		
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