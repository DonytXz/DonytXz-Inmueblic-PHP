<?php

$vid = $_POST['txt_id'];
$vnombre = $_POST['txt_nombre'];
$vtel = $_POST['txt_telefono'];
$vemail = $_POST['txt_email'];
$vdireccion = $_POST['txt_direccion'];


include("../config1.php");

$con=mysqli_connect($HOST,$USER,$PASSW,$BD);
$con -> set_charset("utf8");
if($con)
{
	$bd = mysqli_select_db($con,$BD);//mysqli a veces debe conectar 
		if($bd){
			$query="
			UPDATE duenio SET due_id='$vid', due_nombre='$vnombre', due_telefono='$vtel',
			due_email='$vemail', due_direccion='$vdireccion' WHERE due_id='$vid';";
				mysqli_query($con,$query);
		}
}else{
	echo 'error';
}

echo "<script>alert('Dueño actualizado');window.location= 'duenios.php'</script>";

?>