<!--conexion.php-->
<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conexion = new mysqli($server, $username, $password, $db);
if($conexion)
{
	//echo "Conexion exitosa </br>";
}
else
{
	echo "Fallo la conexion".$conexion->connect_errno."</br>";
}
?>