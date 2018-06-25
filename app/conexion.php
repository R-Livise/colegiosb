<!--conexion.php-->
<?php
$conexion = new mysqli("localhost","root","","ColegioSB");
if($conexion)
{
	//echo "Conexion exitosa </br>";
}
else
{
	echo "Fallo la conexion".$conexion->connect_errno."</br>";
}
?>