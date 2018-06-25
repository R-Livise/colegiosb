<!--cerrar_sesion.php-->
<?php
session_start();
$SESSION['seccion_iniciada'] = false;
$SESSION['usuario'] = false;

session_destroy();
echo "<script type=\"text/javascript\">
			alert('La sesion fue cerrada correctamente');
			window.location=\"index.php\";
		</script>";
?>