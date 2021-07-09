<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/normalize.css">
    <title>Inmueblic</title>
</head>
<body>
<?php include('header.inc'); ?>

<?php
			
		include('../config1.php');	
			
			$con=mysqli_connect($HOST,$USER,$PASSW,$BD);			
			$con -> set_charset("utf8");

			if(!empty($_POST)){
		$email = $_POST["txt_email"];
		$telefono = $_POST["txt_telefono"];
		$rs = mysqli_query($con, "
		SELECT due_id, due_nombre, due_telefono, due_email, due_direccion
		FROM duenio WHERE due_email = '$email' AND due_telefono = '$telefono'");

		if($rs->num_rows>0){
			while($row = mysqli_fetch_array($rs)){
				echo "Bienvenido ".$row['due_nombre'];
				session_start();
				$_SESSION["due_nombre"]=$row["due_nombre"];
				$_SESSION["due_id"]=$row["due_id"];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;	
			header("Location: registrarCasa.php");
			}

		}else{
			echo "<script>alert('Datos incorrectos');window.location= 'login.php'</script>";
		}
		
	}else{
		echo "<script>alert('No haz iniciado sesion');window.location= 'login.php'</script>";
	}
			
			
?>

	
</body>
</html>