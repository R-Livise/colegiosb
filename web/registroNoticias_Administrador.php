<!--registroNoticias_Administrador.php-->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
	include("app/fecha_envio.php");
?>



<?php
	include("app/conexion.php");
		$Titulo = "non";
		$query = "INSERT INTO noticias(Titulo)" ;
	$query = $query . " VALUES ('". $Titulo."')";
	echo $query;
	$resultado = $conexion->query($query);
	
	if($resultado)
	{
		echo "Se inserto registro1";
	}
	else
	{
		echo "No se inserto el registro";
	}

	$query = "SELECT IDNoti FROM noticias";
		$resultado = $conexion->query($query);
		$num_fila = $resultado->num_rows - 1;
		$resultado->data_seek($num_fila);
		$row = $resultado->fetch_assoc();

		echo $row['IDNoti'];
	$Titulo = $_POST['Titulo'];
	$Fecha = $fecha_formatoMySQL;
	$Autor = $_POST['Autor'];
	$Parrafo1 = $_POST['Parrafo1'];
	$Parrafo2 = $_POST['Parrafo2'];
	$Parrafo3 = $_POST['Parrafo3'];
	$IDNoti = $row['IDNoti'];
	$nombrefoto1=$_FILES['Imagen']['name'];
	$ruta1 = $_FILES['Imagen']['tmp_name'];


if(is_uploaded_file($ruta1))
{ 
if($_FILES['Imagen']['type'] == 'image/png' OR $_FILES['Imagen']['type'] == 'image/gif' OR $_FILES['Imagen']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = 'Noti-'.$IDNoti.'.'.$tips;
$destino1 =  "mm/imagen/noti/".$name;
$Imagen = $destino1;
copy($ruta1,$destino1);

$ruta_imagen = $destino1;

$miniatura_ancho_maximo = 480;
$miniatura_alto_maximo = 270;

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


	
	

	$query = " UPDATE noticias ";
$query = $query." SET Titulo='".$Titulo."', ";
$query = $query." Fecha='".$Fecha."', ";
$query = $query." Autor='".$Autor."', ";
$query = $query." Parrafo1='".$Parrafo1."',";
$query = $query." Parrafo2='".$Parrafo2."',";
$query = $query." Parrafo3='".$Parrafo3."',";
$query = $query." Imagen='".$Imagen."'";
$query = $query." WHERE IDNoti = ".$IDNoti;
		echo $query;
	$resultado = $conexion->query($query);
	
	if($resultado)
	{
		echo "Se inserto registro";
		echo "<script type=\"text/javascript\">
			alert('Se modifico el registro');
			window.location=\"Noticias_Administrador.php\";
		</script>";
	}
	else
	{
		echo "No se inserto el registro";
		echo "<script type=\"text/javascript\">
			alert('No se modifico el registro');
			window.location=\"Noticias_Administrador.php\";
		</script>";
	}
?>

<?php
	include("footer-master.php");
?>