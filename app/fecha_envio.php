<!--fecha_envio.php-->
<?php
	date_default_timezone_get("America/Lima");
	$año = date("Y");
	$mes = date("m");
	$dia = date("d");
	$hora = date("H");
	$min = date("i");

	$fecha_formatoMySQL = $año.'-'.$mes.'-'.$dia;
	$fecha_regitro = $año.'_'.$mes.'_'.$dia.'_'.$hora.'_'.$min;
	$fechacodigo = $hora.$min;

?>