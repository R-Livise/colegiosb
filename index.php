<!--index.php-->
<?php
	include("header-master.php");
?>

	<main class=>	<!--Carrusel-->
		
		<div class="container">
		<div id ="SCarrusel" >
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
			<ol class="carousel-indicators" style="">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner" >
				<div class="item active">
					<img src="mm\imagen\carrusel/Carrusel-01.jpg">
					<div class="carousel-caption">
						<p>AMOR Y RESPETO POR EL PERU</p>
					</div>
				</div>
		            <!-- End Item -->
				<div class="item">
					<img src="mm\imagen\carrusel/Carrusel-02.jpg">
					<div class="carousel-caption">
						<p>¡Grítenlo!, Santa Beatriz "CAMPEONES"</p>
					</div>
				</div>
		            <!-- End Item -->
				<div class="item">
					<img src="mm\imagen\carrusel/Portada-01.jpg">
					<div class="carousel-caption">
						<p>Buena Ubicacion</p>
					</div>
				</div>
		            <!-- End Item -->

			</div>

			<!-- Left and right controles -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		</div>
		</div>



	<br/><br/>
	
	
		<div class="container">
			
				<div class="button col-xs-6 col-md-4 " >
					<button type="button" class="btn btn-danger" onclick="focoBE()" >BENEFICIOS</button>
				</div>
				<div class="button col-xs-6 col-md-4" >
					<button type="button" class="btn btn-danger" onclick="focoNO()">NOTICIAS</button>
				</div>
				<div class="button col-xs-6 col-md-4" ">
					<button type="button" class="btn btn-danger" onclick="focoAN()">ANUNCIOS</button>
				</div>
				<div class="button col-xs-6 col-md-4">
					<button type="button" class="btn btn-danger" onclick="focoCA()">CALENDARIO ESCOLAR</button>
				</div>
				<div class="button col-xs-6 col-md-4">
					<button type="button" class="btn btn-danger" onclick="focoGA()">GALERIA</button>
				</div>
				<div class="button col-xs-6 col-md-4">
					<button type="button" class="btn btn-danger" onclick="focoMU()">MULTIMEDIA</button>
				</div>
		</div>

		<br/><br/><br/>

		<article class="container" ; ">
			<br/>
			<h2 style="color: darkblue;">Beneficios</h2>
			
				<div class="row list-group carousel slide" id="theBenefits" >
					<ol class=" ben" >
						<li style="list-style:none;" data-target="#theBenefits" ><a  class="list-group-item list-group-item-action list-group-item-info" href="https://wego.here.com/directions/mix//Centro-Educativo-Madre-Santa-Beatriz,-Urb.-La-Estrella-sn-J.-L.-B.-y-R.,-054-Arequipa,-Peru:e-eyJuYW1lIjoiQ2VudHJvIEVkdWNhdGl2byBNYWRyZSBTYW50YSBCZWF0cml6IiwiYWRkcmVzcyI6IlVyYi4gTGEgRXN0cmVsbGEgc1wvbiAgSi4gTC4gQi4geSBSLiwgQXJlcXVpcGEiLCJsYXRpdHVkZSI6LTE2LjM5ODgsImxvbmdpdHVkZSI6LTcxLjUzNjksInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MTczNjAyMzY5NjYyMDk2MX0=?map=-16.3988,-71.5369,15,normal&fb_locale=es_LA" target="_blank" >Exelente ubicacion</a></li>
						<li style="list-style:none;"  data-target="#theBenefits" data-slide-to="1"><a href="#" class=" list-group-item list-group-item-action list-group-item-info">Amplia area verde</a></li>
						<li style="list-style:none;"  data-target="#theBenefits" data-slide-to="2"><a href="#" class="list-group-item list-group-item-action list-group-item-info">Alto nivel de formacion pedagogica</a></li>
						<li style="list-style:none;" data-target="#theBenefits" data-slide-to="3"><a href="#" class="list-group-item list-group-item-action list-group-item-info">Pesonal experimentado</a></li>
					</ol>
						<a id="beneficios" href="#"></a>
					<div class="carousel-inner benef" >
						<div class="item">
						</div>
		            <!-- End Item -->
						<div class="item active">
							<img src="mm/imagen/beneficios/Beneficio-01.jpg">
						</div>
		            <!-- End Item -->
						<div class="item">
							<img src="mm/imagen/beneficios/Beneficio-02.jpg">
							</div>
		            <!-- End Item -->
						<div class="item">
							<img src="mm/imagen/beneficios/Beneficio-03.jpg">
						</div>
				
					</div>

				</div>	
				<br/>
		</article>
		
		<br/><br/><br/><br/>


<!-- - - - - - - - - noticias - - - - - - - - - -->		
		<section class="noti container">
			<h2 style="color: white;">Noticias  </h2>
			<a id="noticias" href="#"></a>
			<div class="row">

	<?php

		include("app/conexion.php");		
		$query = "SELECT Titulo,Fecha,Parrafo1,Imagen,IDNoti FROM noticias";
		$resultado = $conexion->query($query);
		
		for ($num_fila = $resultado->num_rows - 1; $num_fila >= $resultado->num_rows - 4; $num_fila--) 
		{
		    $resultado->data_seek($num_fila);
		    $row = $resultado->fetch_assoc();

	?>
    		<article class="col-xs-6 col-md-3 ">
    			<div class="minoti" >
					<header>
						<h3><?php echo $row['Titulo'];?> </h3>
							<img src="<?php echo $row['Imagen'];?>">
					</header>
					<p><?php echo $row['Fecha'];?></p>
					<p><?php echo $row['Parrafo1'];?> </p>
					
				</div>
				<a href="PeriodicoEscolarSB.php?cod=<?php echo $row['IDNoti'];?>" class="btn btn-lg">
          <span class="glyphicon glyphicon-chevron-down "></span></a>

			</article>	

	
	<?php 	
		}
	?>
				
			</div>
			<div class="row" style="text-align: right;">
				<a href="PeriodicoEscolarIndiceSB.php?codN=1" class="btn btn-lg"><b>Ver Mas</b>
          <span class="glyphicon glyphicon-triangle-right "></span> </a>
			</div>
		</section>
<!-- - - - - - - - - finnoticias - - - - - - - - - -->
<br/><br/><br/><br/><br/><br/><br/><br/>
<!-- - - - - - - - - anuncio - - - - - - - - - -->	
		<div class="container anuncio">

		<aside class="row anun" style="background-color: rgba(0,52,178,0.5);">
			<br/><br/>
			<h2>Anuncios</h2>
			<br/><br/>
			<a id="anuncios" href="#"></a>

	<?php
		
		$query = "SELECT Fecha,ImagenA,IDAnun FROM anuncios";
		$resultado = $conexion->query($query);
		
		for ($num_fila = $resultado->num_rows - 1; $num_fila >= $resultado->num_rows - 6; $num_fila--) 
		{
		    $resultado->data_seek($num_fila);
		    $row = $resultado->fetch_assoc();

	?>
    		<article class=" col-xs-12 col-sm-6 col-lg-4 ">
    			<div class="">
					<header>
							<img src="<?php echo $row['ImagenA'];?>">
					</header>
					<p></p>
					
				</div>
			</article>	

	
	<?php 	
		}
	?>

		<br/><br/>
		</aside>
		<br/><br/><br/><br/>
	</div>

		
<!-- - - - - - - - - anuncio fin - - - - - - - - - -->	
		<br/><br/><br/><br/>

		<div class="container">	
		<section class="row" <!--id="fechas"--> >
			<h2 >Calendario Escolar</h2>
			<a id="calencario" href="#"></a>	
	<?php 	
		include("app/fecha_envio.php");
		$q = 0;
		$p = 0;
		while ( $q < 12) 
		{
			
		$query = "SELECT * FROM celadarioescolar WHERE MesN = ".$mes ;
		$resultado = $conexion->query($query);
		$num_fila = $resultado->num_rows;
		$resultado->data_seek($p);
	    $row = $resultado->fetch_assoc();
	    
			
	    	if ($row['DiaN'] > $dia) 
	    	{

	?>
				<article class="calend col-xs-6 col-sm-4 col-lg-2">
					<h3><?php echo $row['DiaN'].' de '.$row['MesT'];?> </h3>
					<p><?php echo $row['Celebracion'];?></p>
					

				</article>


	<?php 	
				$q = $q + 1; 
				
			}

			$p = $p + 1; 

			if ( $p == $num_fila) 
			{
				$mes = $mes + 1;
				$dia = 0;
				$p = 0;

			}
			if ( 13 == $mes) 
			{
				$mes = 1;
			}
			if ( 2 == $mes) 
			{
				$mes = 3;
			}

			
		}


	?>
		</section>
		</div>
		
		<br/><br/><br/><br/>

		<div class="container-fluid">
		<section class="row grises" >
			<h2>Galeria</h2>
			<a id="galeria" href="#"></a>
				<a href="Galeria.php">
					<section class=" col-xs-12 col-sm-6">
						<button type="button" class="btn btn-block btn-danger">Fotos</button>
						<img  src="mm/imagen/inicial.jpg">
						<br/><br/><br/>
					</section>
					
				</a>
				
				<a href="galeria.php">
					<section class=" col-xs-12 col-sm-6">
						<button type="button" class="btn btn-block btn-warning">Videos</button>
						<img  src="mm/imagen/inicial.jpg">
					</section>
				</a>
		</section>
		</div>
		
		<br/><br/><br/><br/><br/>
		<div class="container">
		<div class="row">
			<section class="col-xs-12 col-md-6">
				<h2>Multimedia</h2>
				<a id="multimedia" href="#"></a>
					<video width="500"  muted autoplay >
						<source src="mm/video/COMERCIAL_COLEGIO_LOS_QUERUBINES_DE_MAO.webm">
						<source src="mm/video/COMERCIAL COLEGIO LOS QUERUBINES DE MAO.mp4">
						<code>Tu navegador no soporta este elemento</code>
					</video>
			</section>
			<br/><br/>
			<section class="comentario col-xs-12 col-md-6" >
				<h2>Envianos tu comentario</h2>
					<form class="formulario" name="formulario" method="get" action="" onsubmit="return conmetario()">
						<label for="Nombre">Nombre:</label>
						<input type="text" class="form-control escrib" name="Nombre" id="Nombre" placeholder="Escriba su nombre">
						<br/><br/>
						<label for="Apellido">Apellidos:</label>
						<input type="text" class="form-control escrib" name="Apellido" id="Apellido" placeholder="Escriba sus apellidos">
						<br/><br/>
						<label for="Cemail">Email:</label>
						<input type="email" class="form-control escrib" name="Nemail" id="Cemail" placeholder="Escriba su email">
						<br/><br/>
						<label for="Comentario">Comentario:</label><br/>
						<textarea id="Comentario" class="form-control" cols="50" rows="5" placeholder="Escriba su comentario"></textarea>
						<br/>
						<input type="submit" class="enviar" value="Enviar">
						<input type="reset" class="enviar" value="Cancelar">
						<br/>
					</form>
			</section>
		</div>
		</div>
	</main>
<?php
	include("footer-master.php");
?>