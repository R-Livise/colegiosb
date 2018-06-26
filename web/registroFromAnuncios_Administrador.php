<!--registroFromAnuncios_Administrador.php-->
<?php  
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>

<h2>Registrar Noticias</h2>
	<form action='registroAnuncios_Administrador.php' method='POST' return=validacion(); class="row eleminiar" enctype="multipart/form-data">
		<div class="col-xs-6" style="text-align: right; ">

			<label for="ImagenA">Imagen : </label><br>
		</div>
		<div class="col-xs-6" style="text-align: left; max-width: 300px;" >

			<input type="file" name="ImagenA"  id="ImagenA" class="form-control">
			<br><br>
			
			<input type="submit" value="Registrar">
		</div>
	</form>
<br/>
<br/>
<?php
	include("footer-master.php");
?>