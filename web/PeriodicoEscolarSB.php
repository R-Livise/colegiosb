<!--PeriodicoEscolarSB.php-->
<?php
	include("header-master.php");
	include("app/conexion.php");
?>
<?php
	//LEE EL PARAMETRO
	$ID = $_REQUEST['cod'];
	//CONSULTAMOS LOS DATOS DEL ALUMNO
	$query = "SELECT * FROM noticias WHERE IDNoti = ".$ID;
	//echo $query;
	$resultado = $conexion->query($query);
	$row = $resultado->fetch_assoc();
	//MOSTRAMOS LOS DATOS DEL ALUMNO
?>
	<main class="container">
		<br/><br/><br/>
		<article class="row">
		<h2 style="text-transform: uppercase; border-bottom: 5px solid black; border-top: 5px solid black;" ;><?php echo $row['Titulo'];?></h2>
		
		<div class="col-xs-offset-1 col-xs-10  " style="border-right: 5px solid black; border-left: 5px solid black;"  >
			<p style="text-align: center;"><small><b>Autor:</b> <?php echo $row['Autor'];?></small></p>
			<p style="text-align: center;"><small><b>Fecha:</b> <?php echo $row['Fecha'];?></small></p>

			<p><?php echo $row['Parrafo1'];?></p>
			<br/><br/>
	
		
		<div class="col-xs-offset-1 col-xs-10 ">
			<img src="<?php echo $row['Imagen'];?>" style="width: 90%; margin: auto;">
			<br/><br/><br/><br/>
		</div>
		
		
			<br/><br/>
			<p><?php echo $row['Parrafo2'];?></p>
			<p><?php echo $row['Parrafo3'];?></p>
			<br/><br/><br/><br/>
		</div>


		</article>
		<
	</main>

<!--PeriodicoEscolarSB.php-->
<?php
	include("footer-master.php");
?>