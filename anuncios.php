<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../IMG/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/pop.css">
    <title>Anuncios</title>
</head>

<body>
<?php include("TOOLS/header.inc")?>
<main class="contenedor seccion contenido-centrado anuncio contenido-anuncio">
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

echo "<form method='POST' action='insertar.php' enctype='multipart/form-data'>";
echo "<fieldset>";

echo "<h1>Agendar Cita</h1>";

echo "<p>Fecha: <input name='txt_fecha' type='date' required /></p>";

echo "<p>Hora:  <select name='txt_hora'>";
        echo "<option value='08:00'>8:00 AM</option>";
        echo "<option value='08:30'>8:30 AM</option>";
        echo "<option value='09:00'>9:00 AM</option>";
        echo "<option value='09:30'>9:30 AM</option>";
        echo "<option value='10:00'>10:00 AM</option>";
        echo "<option value='10:30'>10:30 AM</option>";
        echo "<option value='11:00'>11:00 AM</option>";
        echo "<option value='11:30'>11:30 AM</option>";
        echo "<option value='12:00'>12:00 PM </option>";
        echo "<option value='12:30'>12:30 PM </option>";
        echo "<option value='13:00'>1:00 PM</option>";
        echo "<option value='13:30'>1:30 PM</option>";
        echo "<option value='14:00'>2:00 PM</option>";
        echo "<option value='14:30'>2:30 PM</option>";
        echo "<option value='15:00'>3:00 PM</option>";
        echo "<option value='15:30'>3:30 PM</option>";
        echo "<option value='16:00'>4:00 PM</option>";
        echo "<option value='16:30'>4:30 PM</option>";
        echo "<option value='17:00'>5:00 PM</option>";
        echo "<option value='17:30'>5:30 PM</option>";
        echo "<option value='18:00'>6:00 PM</option>";
        echo "<option value='18:30'>6:30 PM</option>";
        echo "<option value='19:00'>7:00 PM</option></select></p>";
        
echo "<p>Clave Casa: <input type='number' name='txt_casa' size='20' value='{$ele['cas_id']}' readonly='readonly' required /></p>";

echo "<p>Vendedor: <select name='txt_vendedor'>";
        echo "<option value='1'>Jesus Duran</option>";
        echo "<option value='3'>Luis Meza</option>";
        echo "<option value='4'>Donato Romero</option></select></p>";

echo "<p>Cliente:  <select name='txt_cliente'>";
        echo "<option value='1'>Juan Perez Gonzales</option>";
        echo "<option value='2'>Antonio Velazques Rodrigez</option>";
        echo "<option value='3'>David Cendejas Torrez</option>";
        echo "<option value='4'>Giovani Antonio Perez</option>";
        echo "<option value='5'>Carlos Donato Alvarez</option>";
        echo "<option value='6'>Martin Vega Vulgara</option></select></p>";

echo "<input type='submit' name='Guardar' id='Guardar' value='Guardar'/> ";
echo "</fieldset></form></div>";
echo "<a class='popup-cerrar' href='#'>X</a></div>";
                                
								echo"<div class='blank'>";
                                echo"<h3>Clave: {$ele['cas_id']}</h3>";
                                echo"</div>";
                                echo"<img src='{$ele['cas_foto']}' alt='Imagen Anuncio'>";
                                echo"<p class='m2'> &nbsp; <b>{$ele['cas_metros2']} metros cuadrados</b></p><br>";
                                echo"<p>{$ele['cas_descripcion']}</p>";
                                echo"<p class='direccion'> &nbsp; Dirección: {$ele['cas_direccion']}</p>";
                                echo"<p class='precio'>$ {$ele['cas_precio']} MXN</p>";
                                echo"<a ' class='boton boton-verde ' href='#{$ele['cas_id']}'>Agendar Cita</a>";
                                echo"</div><!--resumen-propiedad-->";   
                                				
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