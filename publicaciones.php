<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/pop.css">
    <title>Publicaciones</title>
</head>

<body>
<?php include("TOOLS/header.inc")?>
<main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">En Venta</h2>
        <div class="contenedor-anuncios">
<?php
include("config1.php");

$con=@mysqli_connect($HOST,$USER,$PASS,$BD);
$con -> set_charset("utf8");
if($con){
		//echo "Connexion con servidor exitosa <br>";
		}else{
			  echo "error en la conexion";
		}

if($con){
		$query="SELECT * FROM casa where cas_estatus=1;";
		$consulta=mysqli_query($con,$query);
		$contador=0;
		if($consulta){
					  //echo"consulta exitosa";
					  while($fila=mysqli_fetch_assoc($consulta)){
																$arreglo[]=$fila;
																}
					  
					  foreach($arreglo as $ele){
                        echo "<div class='pop' id='{$ele['cas_id']}'>";
                        echo "<div class='popup-contenedor'>";
						echo "<center>";
						echo "<h1>Debes estar registrado para agendar una cita</h1>";
						echo "<a href='registrarse.php'  style='text-decoration: none;'><input name='Guardar' id='Guardar' class='boton boton-verde d-block' value='Quiero registrarme' /></a> </div>";
						echo "</center>";
                        echo "<a class='popup-cerrar' href='#'>X</a></div>";

                                echo"<div class='anuncio'>";
                                    echo"<img src='IMG/{$ele['cas_foto']}' >";
                                    //
                                    echo"<div class='contenido-anuncio'>";
                                        echo"<h3 name='clave'cas_id']}'+1>Clave: {$ele['cas_id']}</h3>";
                                        echo"<p class='fecha'> &nbsp; Fecha de publicación: {$ele['cas_fecha_registro']}</p><br>";                                       
                                        echo"<p class='m2'> &nbsp; <b>{$ele['cas_metros2']} metros cuadrados</b></p><br>";
                                        echo"<p>{$ele['cas_descripcion']}</p>";
                                        //echo"<img src='IMG/ubicacion.svg' alt=''>";
                                        //echo"<br></br>";
                                        echo"<p class='direccion'> &nbsp; Dirección: {$ele['cas_direccion']}</p>";
                                        echo"<p class='precio'>$ {$ele['cas_precio']} MXN</p>";
                                        echo"<a ' class='boton boton-verde ' href='#{$ele['cas_id']}'>Agendar Cita</a>";
                                    echo"</div>";
                                echo"</div>";
                            				
                    }

}else{
        echo"Error en la consulta";
     }
}else{
echo "Error en la base de datos";
}
?>
</div>
</main>
<?php include("TOOLS/foter.inc")?>
</body>
</html>