<!--Noticias_Administrador.php-->
<?php  
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>
<h2>Noticias</h2>
<div class="container ">
	<form action='' method='GET' >
		<input type="radio" name="opciones" id="opcion1" value="1">
		<label for="opcion1"> Buscar por Titulo </label>
		<input type="radio" name="opciones" id="opcion2" value="2">
		<label for="opcion2"> Buscar por Autor </label>
		</br></br>
		<label for="parametro">Ingrese el parametro: </label>
		<input type="text" name="cadena" id="parametro  value="" class="form-control escrib">
		<input type="submit" name="Buscar" value="Buscar" class="btn btn-info">
	</form>
	</br></br>
</div>
<div class="container" style="overflow: scroll;">

<a href="registroFormNoticias_Administrador.php" class="btn btn-default btn-sm" style="color:green"><span class="glyphicon glyphicon-plus"></span> Nuevo Registro</a>

<table style="border-width:2px; border-style: solid;" class="table table-hover"">
<thead>
	<tr>
		<td>Titulo</td>
		<td >Fecha</td>
		<td>Autor</td>
		<td>Imagen</td>
		<td>Parrafo1</td>
		<td>Parrafo2</td>
		<td>Parrafo3</td>
		<td>ID</td>
		<td></td>
	</tr>
</thead>
<tbody>
<?php
	include("app/conexion.php");
	if (empty($_GET["opciones"]) && empty($_GET["cadena"])) 
	{
	$query = "SELECT * FROM noticias";
	}

	else
	{	//SI RECIBE PARAMETROS
		//FILTRAR REGISTROS POR APELLIDOS O POR NOMBRES
		$opcion = $_GET["opciones"];
		$parametro = $_GET["cadena"];
		if ($opcion==1)	//BUSCAR POR NOMBRES
		{
			$query = "SELECT * ";
			$query = $query . " FROM noticias"; 
			$query = $query . " WHERE Titulo LIKE '" .$parametro."%'";
		}
		else			//BUSCAR POR APELLIDOS
		{
			$query = "SELECT * "; 
			$query = $query . " FROM noticias"; 
			$query = $query . " WHERE Autor LIKE '" .$parametro."%'";
		}
	}
	//echo $query;
	$resultado = $conexion->query($query);
	$row = $resultado;

	while ( $row = $resultado->fetch_assoc())
	{
	
?>
	<tr>
		<td><p style="width: 100px"><?php echo $row['Titulo'];?></p></td>
		<td><p style="width: 80px"><?php echo $row['Fecha'];?></p></td>
		<td><?php echo $row['Autor'];?></td>
		<td><img style="width: 200px" src="<?php echo $row['Imagen'];?>"></td>
		<td><p style="width: 250px; overflow:hidden;"><?php echo $row['Parrafo1'];?></p></td>
		<td><p style="width: 250px; overflow:hidden;"><?php echo $row['Parrafo2'];?></p></td>
		<td><p style="width: 250px; overflow:hidden;"><?php echo $row['Parrafo3'];?></p></td>

		<td><?php echo $row['IDNoti'];?></td>

		<td><a href="ModificarFormNoticias_Aminitrador.php?cod= <?php echo $row['IDNoti'];?>" class="btn btn-default btn-sm" style="color:blue" ><span class="glyphicon glyphicon-pencil"></span> Editar</a>
		
		<a href="EliminarFormNoticias_Adminitrador.php?cod= <?php echo $row['IDNoti'];?>" class="btn btn-default btn-sm" style="color:red"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
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