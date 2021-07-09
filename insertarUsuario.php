<?php

$vnombre = $_POST['txt_nombre'];
$vtelefono = $_POST['txt_telefono'];
$vnick = $_POST['txt_nickname'];
$vemail = $_POST['txt_email'];
$vpass = $_POST['txt_password'];

include("config1.php");

$con=mysqli_connect($HOST,$USER,$PASSW,$BD);
$con -> set_charset("utf8");
if($con)
{
	$bd = mysqli_select_db($con,$BD);
		if($bd){
			$query="insert into cliente (cli_nombre,cli_telefono,cli_nickname,cli_password,cli_email) values ('$vnombre','$vtelefono','$vnick','$vpass','$vemail');";
				mysqli_query($con,$query);
				
		}
}else{
		die('Fallo en la insercion de registro en la Base de Datos: ' . mysql_error());
}

echo "<script>alert('Datos guardados');window.location= 'cliente/login.php'</script>";

?>