<!--ListaAlumnos_Administrador.php-->
<?php
	include("masterHeader-inicioAministradorMaster.php")
?>
<?php
	include("app/validar_sesion.php");
?>
<h2>Listado de Alumnos</h2>
<div class="container ">
	<form action='' method='GET' >
		<input type="radio" name="opciones" id="opcion1" value="1">
		<label for="opcion1"> Buscar por Nombres </label>
		<input type="radio" name="opciones" id="opcion2" value="2">
		<label for="opcion2"> Buscar por Apellidos </label>
		</br></br>
		<label for="parametro">Ingrese el parametro: </label>
		<input type="text" name="cadena" id="parametro  value="" class="form-control escrib">
		<input type="submit" name="Buscar" value="Buscar" class="btn btn-info">
	</form>
	</br></br>
</div>
<div class="container" style="overflow: scroll; max-height: 1000px">

<a href="registroFormAlumnos_Administrador.php" class="btn btn-default btn-sm" style="color:green"><span class="glyphicon glyphicon-plus"></span> Nuevo Registro</a>

<table style="border-width:2px; border-style: solid;" class="table table-hover"">
<thead>
	<tr>
		<td><b>Codigo</b></td>
		<td><b>Nombres</b></td>
		<td><b>Apellidos</b></td>
		<td><b>Sexo</b></td>
		<td><b>Fecha de Nacimiento</b></td>
		<td><b>Grado</b></td>
		<td><b>DNI</b></td>
		<td><b>Celular 1</b></td>
		<td><b>Celular 2</b></td>
		<td><b>Email</b></td>
		<td><b></b></td>
		<td><b></b></td>	
	</tr>
</thead>
<tbody>
<?php
	include("app/conexion.php");
	include("app/fecha_envio.php");
	if (empty($_GET["opciones"]) && empty($_GET["cadena"])) 
	{
	$query = "SELECT * FROM alumnos";
	}

	else
	{	//SI RECIBE PARAMETROS
		//FILTRAR REGISTROS POR APELLIDOS O POR NOMBRES
		$opcion = $_GET["opciones"];
		$parametro = $_GET["cadena"];
		if ($opcion==1)	//BUSCAR POR NOMBRES
		{
			$query = "SELECT * ";
			$query = $query . " FROM alumnos"; 
			$query = $query . " WHERE Nombres LIKE '" .$parametro."%'";
		}
		else			//BUSCAR POR APELLIDOS
		{
			$query = "SELECT * "; 
			$query = $query . " FROM alumnos"; 
			$query = $query . " WHERE Apellidos LIKE '" .$parametro."%'";
		}
	}
	//echo $query;

	$resultado = $conexion->query($query);
	$row = $resultado;

	while($row = $resultado->fetch_assoc())
	{
		


		$fin = $row['AGraduacion'];

		$falta = $fin - $año;

		if ($falta >= 0 && $falta <=4) {
			$nivel = "Secundaria";
			$grado = 5 - $falta;
		}
		elseif ($falta <= 10) {
			$nivel = "Primaria";
			$grado = 11 - $falta;
		}
		elseif ($falta <= 13) {
			$nivel = "Inicio";
			$grado = 16 - $falta;
		}
		
?>
	<tr>
		<td><?php echo $row['Codigo'];?></td>
		<td><?php echo $row['Nombres'];?></td>
		<td><?php echo $row['Apellidos'];?></td>
		<td><?php echo $row['Sexo'];?></td>
		<td><?php echo $row['FechaNacimineto'];?></td>
		<td><?php echo $grado.' de '.$nivel;?></td>
		<td><?php echo $row['DNI'];?></td>
		<td><?php echo $row['NCelularPadre1'];?></td>
		<td><?php echo $row['NCelularPadre2'];?></td>
		<td><?php echo $row['Email'];?></td>

		<td><a href="ModificarFormAlumnos_Aminitrador.php?cod= <?php echo $row['Codigo'];?>" class="btn btn-default btn-sm" style="color:blue" ><span class="glyphicon glyphicon-pencil"></span> Editar</a> 
		</td>

		<td><a href="EliminarFormAlumnos_Adminitrador.php?cod= <?php echo $row['Codigo'];?>" class="btn btn-default btn-sm" style="color:red"><span class="glyphicon glyphicon-remove"></span> Eliminar </a></td>
	</tr>
<?php 	
	}
?>
</tbody>
</table>
</div>

<br/>

<?php
	include("footer-master.php");
?>