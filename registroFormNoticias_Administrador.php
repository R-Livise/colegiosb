<!--registroFormNoticias_Administrador.php-->
<?php  
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>



<h2>Registrar Noticias</h2>
	<form action='registroNoticias_Administrador.php' method='POST' return=validacion(); class="row eleminiar" enctype="multipart/form-data">
		<div class="col-xs-6" style="text-align: right; ">
			<label for="Titulo" >Título : </label><br>
			<label for="Autor">Autor: </label><br>
			<label for="Parrafo1">Parrafo 1 : </label><br><br><br><br><br>
			<label for="Parrafo2">Parrafo 2 : </label><br><br><br><br><br>
			<label for="Parrafo3">Parrafo 3 : </label><br><br><br><br><br>	
			<label for="Imagen">Imagen : </label><br>
		</div>
		<div class="col-xs-6" style="text-align: left; max-width: 300px;" >
		
			<input type="text" name="Titulo"  id="Titulo" class="form-control">
			
			<input type="text" name="Autor" id="Autor" class="form-control"	>
			
			<textarea type="text" rows="5" name="Parrafo1" id="Parrafo1" class="form-control"></textarea>
			
			<textarea type="text" rows="5" name="Parrafo2" id="Parrafo2" class="form-control"></textarea>
			
			<textarea type="text" rows="5" name="Parrafo3" id="Parrafo3" class="form-control"></textarea>

			<input type="file" name="Imagen"  id="Imagen" class="form-control">
			<br><br>
			
			<input type="submit" value="Registrar">
		</div>
	</form>
<br/>
<br/>
<?php
	include("footer-master.php");
?>