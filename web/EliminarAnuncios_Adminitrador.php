<!--EliminarAnuncios_Adminitrador.php -->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>
<?php
	include("app/conexion.php");
	//LEE EL PARAMETRO
$Codigo = $_POST['IDAnun'];

$query = " DELETE FROM anuncios ";
$query = $query." WHERE IDAnun = ".$Codigo;
//echo $query;
$resultado = $conexion->query($query);

if($resultado)
{	echo "Se Elimino el registro";
echo "<script type=\"text/javascript\">
			alert('Se Elimino el registro');
			window.location=\"anuncios_Administrador.php\";
		</script>";
}
else
{	echo "No se ELIMINO el registro";
echo "<script type=\"text/javascript\">
			alert('Se Elimino el registro');
			window.location=\"anuncios_Administrador.php\";
		</script>";
}
?>
<?php
	include("footer-master.php");
?>