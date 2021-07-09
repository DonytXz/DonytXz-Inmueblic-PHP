<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmueblic</title>
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/normalize.css">
</head>
<body>
<!--
3A TI
VENTA DE CASAS
INTEGRANTES: BALTAZAR LOPEZ RAUL DESIDERIO, DONATO ALVAREZ, MEZA FLORES LUIS SALVADOR, Chacon Hector
 -->
 <header class="site-header inicio">
    <div class="contenedor contenido-header">
        <div class="barra">
            <a href="index.php">   
                <img src="img/logo.jpg" width="100" alt="Logo INMUEBLIC">
            </a>

            <div class="mobile-menu">
                <a href="#navegacion">
                    <img src="img/barras.svg" alt="Icono Menu">
                </a>
            </div>

            <nav id="navegacion" class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="publicaciones.php">Publicaciones</a>
                <a href="contacto.php">Contacto</a>
                <a href="iniciarsesion.php">Iniciar Sesión</a>
            </nav>
        </div>
        <h1>Venta de Casas</h1>
    </div> 
</header>

<section class="contenedor seccion">
    <h2 class="centrar-texto brown blank">La mejor opcion</h2>
    <div class="iconos-nosotros blank">
        <div class="icono">
            <img src="img/icono1.svg" width="240px" alt="Icono Seguridad">
            <h3>Seguridad</h3>
            
        </div>

        <div class="icono">
            <img src="img/icono2.svg" width="240px" alt="Icono Mejor Precio">
            <h3>El Mejor Precio</h3>
            
        </div>

        <div class="icono">
            <img src="img/icono3.svg" width="240px" alt="Icono a Tiempo">
            <h3>A Tiempo</h3>
            
        </div>
    </div>
</section>

    <main>   
        <div class="contenido-main blank">
            <div class="Imagen-Main">
                <img src="img/vender.jpg" alt="EncuentraTuCasa">
                <div class="brown">
                    <h2>Vender Propiedad</h2>

                    <a href="registrarseDuenio.php" class="boton boton-verde d-block">Registrarse</a>
                </div>
            </div> 
            
            <div class="Imagen-Main">
                <img src="img/encuentraCasa.jpg" alt="EncuentraTuCasa">
                <div class="brown">
                    <h2>Descubrir Casas</h2>

                    <a href="publicaciones.php" class="boton boton-verde d-block">Ver Publicaciones</a>
                </div>
            </div>
        </div>
    </main> 

    <?php include("TOOLS/foter.inc")?>

</body>
</html>