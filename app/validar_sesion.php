<!-- validar_sesion.php-->
<?php 
session_start();
// SI NO DE A LOGEADO EL USUARIO
If(!isset($_SESSION["Usuario"]))
{
	echo "<script type=\"text/javascript\">
			alert('Debes iniciar sesion para acceder a la página');
			window.location=\"index.php\";
		</script>
	  ";
}