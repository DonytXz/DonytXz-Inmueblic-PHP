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
		$query="SELECT * FROM casa;";

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
					  echo "<th>Dirección</th>";
					  echo "<th>M2</th>";
					  echo "<th>Precio</th>";
					  echo "<th>Descripción</th>";
					  echo "<th>Foto Casa</th>";
					  echo "<th>Fecha venta</th>";
					  echo "<th>ID Dueño</th>";
					  echo "<th>Opciones</th>";
					  echo "</tr>";
					  foreach($arreglo as $ele){

									echo"<tr>";
									echo "<form action='actualizarCasa.php' onsubmit='return valida(this)' method='POST'>";
												echo"<td><input name='txt_id' type='text' class='inid' value='{$ele['cas_id']}' readonly='readonly'/></td>";
												echo"<td><input name='txt_fecha_reg' type='date' value='{$ele['cas_fecha_registro']}' readonly='readonly' /></td>";
												echo"<td><input name='txt_estatus' type='text' maxlength='1' class='inid' value='{$ele['cas_estatus']}'/></td>";
												echo"<td><textarea name='txt_direccion' maxlength='100' type='text'>{$ele['cas_direccion']} </textarea></td>";
												echo"<td><input name='txt_m2' type='text' class='inid' value='{$ele['cas_metros2']}'/></td>";
												echo"<td><input name='txt_precio' type='text' value='{$ele['cas_precio']}'/></td>";
												echo"<td><textarea name='txt_descripcion' maxlength='300' type='text' >{$ele['cas_descripcion']}</textarea></td>";
												echo"<td><a href='../IMG/{$ele['cas_foto']}' target='_blank'><img src='../IMG/{$ele['cas_foto']}' width='100%' /></a></td>";
												echo"<td><input name='txt_fecha_venta' type='date' value='{$ele['cas_fecha_venta']}'/></td>";
												echo"<td><input name='txt_duenio' type='text' class='inid' value='{$ele['cas_due_id']}'/></td>";
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

</body>
</html>