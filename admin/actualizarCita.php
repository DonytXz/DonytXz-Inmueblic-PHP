<?php

$vid = $_POST['txt_id'];
$vfecha = $_POST['txt_fecha'];
$vhora = $_POST['txt_hora'];
$vcasa = $_POST['txt_id_casa'];
$vvendedor = $_POST['txt_id_vend'];
$vcliente = $_POST['txt_id_cli'];


include("../config1.php");

$con=mysqli_connect($HOST,$USER,$PASSW,$BD);
$con -> set_charset("utf8");
if($con)
{
	$bd = mysqli_select_db($con,$BD);//mysqli a veces debe conectar 
		if($bd){
			$query="
UPDATE cita SET cit_id='$vid', cit_fecha_cita='$vfecha', cit_hora_cita='$vhora',
cit_cas_id='$vcasa', cit_vend_id='$vvendedor',cit_cli_id='$vcliente'  WHERE cit_id='$vid';";
				mysqli_query($con,$query);
		}
}else{
	echo 'error';
}

echo "<script>alert('Cita actualizada');window.location= 'citas.php'</script>";

?>