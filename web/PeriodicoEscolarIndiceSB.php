<!--PeriodicoEscolarIndiceSB.php-->
<?php
	include("header-master.php");
	include("app/conexion.php");
?>

<section class="container">
			<h2 style="color: white;">Noticias</h2>
			<div class="row">
<?php
	//LEE EL PARAMETRO
	
	if (empty($_REQUEST['codN'])) {
		$codN = 1;
	}
	else{
		$codN = $_REQUEST['codN'];
	}
	
	
	$query = "SELECT * FROM noticias";
	$resultado = $conexion->query($query);
	$num_fila = $resultado->num_rows;
		for ($q = 0; $q < 6 ; $q++) 
		{
			$num_fila = $num_fila - 1;
		    $resultado->data_seek($num_fila);
		    $row = $resultado->fetch_assoc();
	?>
    		<article class="col-xs-12 col-md-6 PerEscol" >
    			<article>
					<h2>
						<b> <?php echo $row['Titulo'];?></b>
					 </h2>
					<br/>
					<div class="row">
					<div class="col-md-8">
						<img src="<?php echo $row['Imagen'];?>">
					</div>
					<div class="col-md-4"; style="overflow: hidden; height: 200px;">
						<p><?php echo "Fecha :".$row['Fecha'];?></p>
						<p><?php echo $row['Parrafo1'];?> </p>
					</div>
					</div>
					<a href="PeriodicoEscolarSB.php?cod=<?php echo $row['IDNoti'];?>" ><h2></h2><span class="glyphicon glyphicon-chevron-down "></span></a>
				</article>
				<br/>
			</article>	

	
	<?php 	
			if ($num_fila == 0) {
			$q = $q + 6;
			}
		}
	?>
		
</div>
</section>
<article style="text-align: center; color: black; display: inline-block; border: 2px solid black; width: 100%" >
<?php 
if ($codN > 1) {
?>
		<a style="text-align: center; color: black; display: inline-block; border: 2px solid black; margin: auto;" href="PeriodicoEscolarIndiceSB.php?codN=<?php echo $codN;?>">[Anterior]</a>

<?php 
}

if ($codN >2) {

?>
		<a style="text-align: center; color: black; display: inline-block; border: 2px solid black; margin: auto;" href="PeriodicoEscolarIndiceSB.php"> << </a>
		<a style="text-align: center; color: black; display: inline-block; border: 2px solid black; margin: auto;" href="PeriodicoEscolarIndiceSB.php?codN=<?php echo $codN - 2 ;?>"><?php echo $codN - 2 ;?></a>
		<a style="text-align: center; color: black; display: inline-block; border: 2px solid black; margin: auto;" href="PeriodicoEscolarIndiceSB.php?codN=<?php echo $codN - 1 ;?>"><?php echo $codN - 1 ;?></a>

		<p style="display: inline-block;">...</p>
<?php 
}
?>

<a style="text-align: center; color: black; display: inline-block; border: 2px solid black; margin: auto;" href="PeriodicoEscolarIndiceSB.php?codN=<?php echo $codN + 1 ;?>"><?php echo $codN + 1 ;?></a>
<a style="text-align: center; color: black; display: inline-block; border: 2px solid black; margin: auto;" href="PeriodicoEscolarIndiceSB.php?codN=<?php echo $codN + 2 ;?>"><?php echo $codN + 2 ;?></a>
<a style="text-align: center; color: black; display: inline-block; border: 2px solid black; margin: auto;" href="PeriodicoEscolarIndiceSB.php?codN=<?php echo $codN + 3;?>"><?php echo $codN + 3 ;?></a>
<!--PeriodicoEscolarSB.php-->
<a style="text-align: center; color: black; display: inline-block; border: 2px solid black; margin: auto;" href="PeriodicoEscolarIndiceSB.php?codN=<?php echo $codN + 1;?>">[Siguirnte]</a>

</article>
<br/>
<br/>
<?php
	include("footer-master.php");
?>