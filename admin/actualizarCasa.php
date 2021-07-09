<?php

$vid = $_POST['txt_id'];
$vfr = $_POST['txt_fecha_reg'];
$vestatus = $_POST['txt_estatus'];
$vdireccion = $_POST['txt_direccion'];
$vm2 = $_POST['txt_m2'];
$vprecio = $_POST['txt_precio'];
$vdescripcion = $_POST['txt_descripcion'];
$vfv = $_POST['txt_fecha_venta'];
$vduenio = $_POST['txt_duenio'];


include("../config1.php");

$con=mysqli_connect($HOST,$USER,$PASSW,$BD);
$con -> set_charset("utf8");
if($con)
{
	$bd = mysqli_select_db($con,$BD);//mysqli a veces debe conectar 
		if($bd){
			$query="UPDATE casa SET cas_id='$vid', cas_fecha_registro='$vfr', cas_estatus='$vestatus', cas_direccion='$vdireccion', cas_metros2='$vm2', cas_precio='$vprecio', cas_descripcion='$vdescripcion', cas_fecha_venta='$vfv',cas_due_id='$vduenio' WHERE cas_id='$vid';";
				mysqli_query($con,$query);
				echo "<script>alert('Casa Actualizada');window.location= 'casas.php'</script>";
		}
}else{
	echo 'error';
}



?>