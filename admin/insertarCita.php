<?php

$vfecha = $_POST['txt_fecha'];
$vhora = $_POST['txt_hora'];
$vcasa = $_POST['txt_casa'];
$vvendedor = $_POST['txt_vendedor'];
$vcliente = $_POST['txt_cliente'];

//$vf = explode('/',$vfecha);
//$vfechabien = $vf[2]."-".$vf[0]."-".$vf[1];

include("../config1.php");

$con=mysqli_connect($HOST,$USER,$PASSW,$BD);
$con -> set_charset("utf8");
if($con)
{
	$bd = mysqli_select_db($con,$BD);//mysqli a veces debe conectar 
		if($bd){
			$query="insert into cita(cit_fecha_cita,cit_hora_cita,cit_cas_id,cit_vend_id,cit_cli_id) values ('$vfecha','$vhora','$vcasa','$vvendedor','$vcliente');";
				mysqli_query($con,$query);
		}
}else{
	echo 'error';
}

echo "<script>alert('Cita agendada');window.location= 'citas.php'</script>";

?>