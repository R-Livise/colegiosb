<!--Galeria.php-->
<?php
	include("header-master.php");
?>
<header class="container">
<br/>
	<div class="row">
		<h2> FOTOS DEL COLEGIO</h2>
<?php
	$i =1;
	while ( $i<= 8) 
	{
		echo '<div class="col-xs-12 col-sm-6 col-md-3 ">
			<img src="mm/imagen/fotos/Fotos_00'.$i.'.jpg">
		</div>';
		$i++;
	}
	
?>		
		
	</div>
</header>
        <br/>
        
<?php
	include("footer-master.php");
?>
