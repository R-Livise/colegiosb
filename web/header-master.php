<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Colegio Santa Beatriz</title>
	<link rel="shortcut icon" href="mm/imagen/logo-01.png" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/Style1.css">
	<script type="text/javascript" src="js/script1.js"></script>
</head>

<body  onload="fechasCalendario()"> 

	<header class="">
		<!--navegacion interna -->
		<nav class="cabezera_1 navbar-static-top navbar-inverse">
			<div class="container" >
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_inter" >
						<span class="sr-only">menu inteno</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                    <a class="navbar-brand" id="arriba" href="#">RED</a>
				</div>
                
				<div class="collapse navbar-collapse navbar-right" id="navbar_inter">
		            <ul class="nav navbar-nav">    
						<li><a href="formulario_RedInterna.php" target="_blank" > Red Intena </a></li>
					</ul>
                    <form class="navbar-form navbar-left">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Buscar">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</nav>
		<!--nombre del colegio-->
		<nav class="container-fluid">
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-3 col-md-offset-1 col-lg-2 col-lg-offset-2 ">
				<a href="index.php" class="logo"><img src="mm/imagen/ala_2.png" class="cabezera"/></a>
				</div>
				<div class="col-xs-3 col-xs-offset-1 col-sm-offset-2 col-sm-2 col-md-1 col-md-offset-0 col-lg-1">
					<a href="index.php" class="logo">
						<picture>
							<source srcset="mm/imagen/Cabezera-02.jpg" media="(min-width: 1000px)">
							<source srcset="mm/imagen/Cabezera-02.jpg" media="(max-width: 600px)">
							<source srcset="mm/imagen/Cabezera-01.jpg">
							<img src="mm/imagen/Cabezera-01.jpg" alt="logo" class="cabezera">
						</picture>
					</a>

				</div>
				<span class="col-xs-8 col-md-3 col-lg-3" style="padding-top: 2% ;" >
					<h1><b>E.I</b></h1>
					<br/>
					<h1><b>Madre</b></h1>
					<h1><b>Santa</b></h1>
					<h1><b>Beatriz</b></h1>
				</span>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-2">
				<a href="index.php" class="logo"><img src="mm/imagen/ala_1.png" class="cabezera"/></a>
				</div>
			</div>
		</nav>

		<!--navegacion externa  -->
		<nav class=" cabezera_2  navbar-default navbar-static-top navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-exter">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>			
					</button>
					
				</div>
				<div class="collapse navbar-collapse" id="navbar-exter">
					<ul class=" nav navbar-nav">
						<li><a href="index.php" > INICIO </a></li>
						<li><a href="Nosotros.php" > Nosotros </a></li>
						<li><a href="Talleres.php" > Talleres </a></li>
						<li><a href="Admision.php" > Admisión </a></li>
						<li><a href="Metodologia.php" > Metodologia </a></li>
						<li><a href="Actividades.php" > Actividades </a></li>
						<li><a href="PeriodicoEscolarIndiceSB.php?codN=1"> Noticias </a></li>
						<li><a href="Galeria.php" > Galeria </a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="barra">
			
		</div>
	
	<button   type="button" class=" arriba btn btn-default btn-lg" onclick="focoIN()">
          <span class=" glyphicon glyphicon-menu-up"></span>
      </button>
</header>

