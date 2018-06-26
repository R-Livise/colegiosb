<!--registroAnuncios_Administrador.php-->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
	include("app/fecha_envio.php");
?>



<?php
	include("app/conexion.php");
	$Fecha = $fecha_formatoMySQL;
	$nombrefoto1=$_FILES['ImagenA']['name'];
	$ruta1 = $_FILES['ImagenA']['tmp_name'];


if(is_uploaded_file($ruta1))
{ 
if($_FILES['ImagenA']['type'] == 'image/png' OR $_FILES['ImagenA']['type'] == 'image/gif' OR $_FILES['ImagenA']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = 'Anuncios'.$IDAnun.'.'.$tips;
$destino1 =  "mm/imagen/anuncios/".$name;
$ImagenA = $destino1;
copy($ruta1,$destino1);

$ruta_imagen = $destino1;

$miniatura_ancho_maximo = 500;
$miniatura_alto_maximo = 200;

$info_imagen = getimagesize($ruta_imagen);
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( $ruta_imagen );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( $ruta_imagen );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( $ruta_imagen );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, $destino1, 80);
}
}
	
	$query = "INSERT INTO anuncios (Fecha, ImagenA)" ;
	$query = $query . " VALUES ('".$Fecha."', '".$ImagenA."' )";
	
		echo $query;
	$resultado = $conexion->query($query);
	
	if($resultado)
	{
		echo "Se inserto registro";
		echo "<script type=\"text/javascript\">
			alert('Se modifico el registro');
			window.location=\"anuncios_Administrador.php\";
		</script>";
	}
	else
	{
		echo "No se inserto el registro";
		echo "<script type=\"text/javascript\">
			alert('No se modifico el registro');
			window.location=\"anuncios_Administrador.php\";
		</script>";
	}
?>

<?php
	include("footer-master.php");
?>