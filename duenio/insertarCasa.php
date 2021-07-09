<?php

$vfecha = $_POST['txt_fecha'];
$vestatus = $_POST['txt_estatus'];
$vdireccion = $_POST['txt_direccion'];
$vm2 = $_POST['txt_m2'];
$vprecio = $_POST['txt_precio'];
$vdescripcion = $_POST['txt_descripcion'];
//$vfoto = NULL;
$vfechaventa = NULL;
$vdueid = $_POST['txt_duenio'];

include("../config1.php");
$con=mysqli_connect($HOST,$USER,$PASSW,$BD);
$con -> set_charset("utf8");
if($con)
{


	$bd = mysqli_select_db($con,$BD);
		if($bd){

$vvfecha = $_REQUEST['txt_fecha'];
$nombreimg = $_FILES['txt_foto']['name'];
$archivo = $_FILES['txt_foto']['tmp_name'];
$ruta = "../IMG/";
$ruta = $ruta.$nombreimg;
move_uploaded_file($archivo,$ruta);
	
			$query="insert into casa 
			(cas_fecha_registro, cas_estatus, cas_direccion, cas_metros2, cas_precio, cas_descripcion, cas_foto, cas_fecha_venta, cas_due_id) 
			values ('$vfecha','$vestatus','$vdireccion','$vm2','$vprecio','$vdescripcion', '$nombreimg', '$vfechaventa', '$vdueid');";
				mysqli_query($con,$query);
echo "<script>alert('Datos guardados');window.location= 'miscasas.php'</script>";
		}
		
}else{
		die('Fallo en la insercion de registro en la Base de Datos: ' . mysql_error());
}




?>