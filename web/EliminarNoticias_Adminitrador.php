<!--EliminarNoticias_Adminitrador.php -->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>
<?php
	include("app/conexion.php");
	//LEE EL PARAMETRO
$Codigo = $_POST['IDNoti'];

$query = " DELETE FROM noticias ";
$query = $query." WHERE IDNoti = ".$Codigo;
//echo $query;
$resultado = $conexion->query($query);

if($resultado)
{	echo "Se Elimino el registro";
echo "<script type=\"text/javascript\">
			alert('Se Elimino el registro');
			window.location=\"Noticias_Administrador.php\";
		</script>";
}
else
{	echo "No se ELIMINO el registro";
echo "<script type=\"text/javascript\">
			alert('Se Elimino el registro');
			window.location=\"Noticias_Administrador.php\";
		</script>";
}
?>
<?php
	include("footer-master.php");
?>