<!--registroFormAlumnos_Administrador.php-->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>
<h2>Registro de Alumnos</h2>

	<form action='registroAlumnos_Administrador.php' method='POST' return=validacion(); class="row eleminiar">
		<div class="col-xs-6" style="text-align: right;  ">
			<label for="Codigo" >Código : </label><br>
			<label for="Nombres">Nombres: </label><br>
			<label for="Apellidos">Apellidos: </label><br>
			<label for="FechaNacimineto">Fecha Nacimiento: </label><br>
			<label for="Sexo">Sexo : </label><br>
			<label for="AGraduacion">AGraduacion : </label><br>
			<label for="DNI">DNI : </label><br>
			<label for="NCelularPadre1">Celular 1: </label><br>
			<label for="NCelularPadre2">Celular 2: </label><br>
			<label for="Email">Email : </label><br>
		</div>
		<div class="col-xs-6" style="text-align: left; max-width: 300px;" >
		<input type="number" name="Codigo" id="Codigo"  class="form-control">	
		
		<input type="text" name="Nombres"  id="Nombres" class="form-control">
		
		<input type="text" name="Apellidos" id="Apellidos" class="form-control"	>
		
		<input type="text" name="FechaNacimineto" id="FechaNacimineto" class="form-control">
		
		<input type="text" name="Sexo"  id="Sexo" class="form-control"	>
		
		<input type="text" name="AGraduacion"  id="AGraduacion" class="form-control">
		
		<input type="number" name="DNI"  id="DNI" class="form-control"	>
		
		<input type="number" name="NCelularPadre1" id="NCelularPadre1" class="form-control">
		
		<input type="number" name="NCelularPadre2"  id="NCelularPadre2" class="form-control">
		
		<input type="text" name="Email" id="Email" class="form-control">
		
		<input type="submit" name="Registrar" value="Registrar">
		</div>
	</form>
<br/>
<br/>
<?php
	include("footer-master.php");
?>