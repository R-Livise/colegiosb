<!--inicio_AdministradorMaster.php-->
<?php
	include("masterHeader-inicioAministradorMaster.php")
?>

<?php
	include("app/conexion.php");
	//RECIBE USUARIO Y PASSWORD
	$user = $_REQUEST['Usuario'];
	$passwd = $_REQUEST['Contrasena'];
	//CONSULTA A LA TABLA USUARIOS, ¿¿EXISTE EL USUARIO Y PASSWORD??
	$query = " SELECT NivelAcc, Usuario, Password FROM administradores ";
	$query = $query . " WHERE Usuario = '".$user."'" ;
	$query = $query . "	AND Password = '".$passwd."';";
	//LANZA LA CONSULTA A LA BASE DE DATOS
	$resultado = $conexion->query($query);
	//TOMA NRO FILAS DEVUELTO POR LA BASE DE DATOS
	$num_filas = $resultado->num_rows;
	$reg = $resultado->fetch_assoc();
	//SI EXISTE EL USUARIO Y PASSWORD
	if($num_filas > 0)
	{	echo "<h2>Bienvenido  " . $user . "</h2>";
		//iniciar sesion
		session_start();
		$_SESSION['sesion_iniciada'] = true;
		$_SESSION['Usuario'] = $reg['Usuario'];

?>
 <div class="container">
 <h3>ACCESO A</h3>
 <ol class="col-xs-6 col-sm-4 col-ms-2">
	<li>Notas a alumnos</li>
	<li>Base de datos alumnos</li>
	<li>Base de datos maestros</li>
	<li>Noticias</li>
	<li>Anuncios</li>
	<li>Base de datos padres</li>
  </p>

 </div>

<?php 	
	}
	else
	{	
		echo("ERROR");
		header("Location: formulario_redInterna.php");
	}
?>

<?php
	include("footer-master.php")
?>
