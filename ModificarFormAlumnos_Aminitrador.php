<!--ModificarFormAlumnos_Aminitrador.php -->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>
<?php
	include("app/conexion.php");
	//LEE EL PARAMETRO
	$codigo = $_REQUEST['cod'];
	//CONSULTAMOS LOS DATOS DEL ALUMNO
	$query = "SELECT Codigo, Nombres, Apellidos, Sexo, FechaNacimineto, AGraduacion, DNI, NCelularPadre1, NCelularPadre2, Email ";
	$query = $query . " FROM alumnos WHERE Codigo = ".$codigo;
	//echo $query;
	$resultado = $conexion->query($query);
	$row = $resultado->fetch_assoc();
	//MOSTRAMOS LOS DATOS DEL ALUMNO
?>
<br/>
<br/>
	<h2>Modificar noticia</h2>
	<form action='ModificarAlumnos_Aminitrador.php' method='POST' class="row eleminiar">
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
		<input type="number" name="Codigo" id="Codigo"  class="form-control"
			   value="<?php echo $row['Codigo']; ?>" >	
		
		<input type="text" name="Nombres"  id="Nombres" class="form-control"
			   value="<?php echo $row['Nombres']; ?>" >
		
		<input type="text" name="Apellidos" id="Apellidos" class="form-control"
			   value="<?php echo $row['Apellidos']; ?>" >
		
		<input type="text" name="FechaNacimineto" id="FechaNacimineto" class="form-control"
				value="<?php echo $row['FechaNacimineto']; ?>" >
		
		<input type="text" name="Sexo"  id="Sexo" class="form-control"
			   value="<?php echo $row['Sexo']; ?>" >
		
		<input type="text" name="AGraduacion"  id="AGraduacion" class="form-control"
			   value="<?php echo $row['AGraduacion']; ?>" >
		
		<input type="number" name="DNI"  id="DNI" class="form-control"
			   value="<?php echo $row['DNI']; ?>" >
		
		<input type="number" name="NCelularPadre1" id="NCelularPadre1" class="form-control"
				value="<?php echo $row['NCelularPadre1']; ?>" >
		
		<input type="number" name="NCelularPadre2"  id="NCelularPadre2" class="form-control"
			   value="<?php echo $row['NCelularPadre2']; ?>" >
		
		<input type="text" name="Email" id="Email" class="form-control"
				value="<?php echo $row['Email']; ?>" >
		
		<input type="submit" name="Modificar">
		</div>
	</form>
<br/>
<br/>
<?php
	include("footer-master.php");
?>