<!--registroAlumnos_Administrador.php-->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>
<?php
	include("app/conexion.php");
	$Codigo = $_POST['Codigo'];
	$Nombres = $_POST['Nombres'];
	$Apellidos = $_POST['Apellidos'];
	$Sexo = $_POST['Sexo'];
	$FechaNacimineto = $_POST['FechaNacimineto'];
	$AGraduacion = $_POST['AGraduacion'];
	$DNI = $_POST['DNI'];
	$NCelularPadre1 = $_POST['NCelularPadre1'];
	$NCelularPadre2 = $_POST['NCelularPadre2'];
	$Email = $_POST['Email'];
	
	$query = "INSERT INTO alumnos (Codigo, Nombres, Apellidos, Sexo,FechaNacimineto, AGraduacion, DNI,NCelularPadre1, NCelularPadre2,Email)" ;
	$query = $query . " VALUES ('".$Codigo."','".$Nombres."','".$Apellidos."','".$Sexo."','".$FechaNacimineto."','".$AGraduacion."','".$DNI."','".$NCelularPadre1."','".$NCelularPadre2."','".$Email."')";
	echo $query;
	//echo $query;
	$resultado = $conexion->query($query);
	
	if($resultado)
	{
		echo "Se inserto registro";
		echo "<script type=\"text/javascript\">
			alert('Se modifico el registro');
			window.location=\"ListaAlumnos_Administrador.php\";
		</script>";
	}
	else
	{
		
		echo "No se inserto el registro";
		echo "<script type=\"text/javascript\">
			alert('No se modifico el registro');
			window.location=\"ListaAlumnos_Administrador.php\";
		</script>";
	}
?>

<?php
	include("footer-master.php");
?>