<!-- ModificarAlumnos_Aminitrador.php -->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>


<?php
//RECIBE DATOS MODIFICADOS DEL ALUMNO
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

//ACTUALIZA LOS DATOS EN LA TABLA
$query = " UPDATE alumnos ";
$query = $query." SET Nombres='".$Nombres."', ";
$query = $query." Apellidos='".$Apellidos."', ";
$query = $query." Sexo='".$Sexo."', ";
$query = $query." FechaNacimineto='".$FechaNacimineto."',";
$query = $query." AGraduacion='".$AGraduacion."',";
$query = $query." DNI='".$DNI."',";
$query = $query." NCelularPadre1='".$NCelularPadre1."',";
$query = $query." NCelularPadre2='".$NCelularPadre2."',";
$query = $query." Email='".$Email."'";
$query = $query." WHERE Codigo = ".$Codigo;
$resultado = $conexion->query($query);
if($resultado)
{	echo "Se modifico el registro";
echo "<script type=\"text/javascript\">
			alert('Se modifico el registro');
			window.location=\"ListaAlumnos_Administrador.php\";
		</script>";
}
else
{	echo "No se modifico el registro";
echo "<script type=\"text/javascript\">
			alert('No se modifico el registro');
			window.location=\"ListaAlumnos_Administrador.php\";
		</script>";
}
?>
<?php
	include("footer-master.php");
?>