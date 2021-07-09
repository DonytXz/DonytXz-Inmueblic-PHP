<?php

$vid = $_POST['txt_id'];
$vnombre = $_POST['txt_nombre'];
$vtel = $_POST['txt_telefono'];
$vnick = $_POST['txt_nickname'];
$vemail = $_POST['txt_email'];
$vpass = $_POST['txt_pass'];

include("../config1.php");

$con=mysqli_connect($HOST,$USER,$PASSW,$BD);
$con -> set_charset("utf8");
if($con)
{
	$bd = mysqli_select_db($con,$BD);//mysqli a veces debe conectar 
		if($bd){
			$query="
			UPDATE cliente SET cli_id='$vid', cli_nombre='$vnombre', cli_telefono='$vtel',
			cli_nickname='$vnick',cli_email='$vemail', cli_password='$vpass' WHERE cli_id='$vid';";
				mysqli_query($con,$query);
			
		}
}else{
	echo 'error';
}

echo "<script>alert('Cliente actualizado');window.location= 'clientes.php'</script>";

?>