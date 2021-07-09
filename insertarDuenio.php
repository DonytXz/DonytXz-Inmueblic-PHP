<?php

$vnombre = $_POST['txt_nombre'];
$vtelefono = $_POST['txt_telefono'];
$vemail = $_POST['txt_email'];
$vdireccion = $_POST['txt_direccion'];

include("config1.php");

$con=mysqli_connect($HOST,$USER,$PASSW,$BD);
$con -> set_charset("utf8");
if($con)
{
	$bd = mysqli_select_db($con,$BD);
		if($bd){
			$query="insert into duenio (due_nombre,due_telefono,due_email,due_direccion) values ('$vnombre','$vtelefono','$vemail','$vdireccion');";
				mysqli_query($con,$query);
		}
}else{
		die('Fallo en la insercion de registro en la Base de Datos: ' . mysql_error());
}

echo "<script>alert('Datos guardados');window.location= 'duenio/index.php'</script>";

?>