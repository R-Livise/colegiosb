<!--anuncios_Administrador.php-->
<?php
	include("masterHeader-inicioAministradorMaster.php")
?>
<?php
	include("app/validar_sesion.php");
?>
<h2>Anuncios</h2>
<div class="container" style="overflow: scroll; max-height: 1000px">
<a href="registroFromAnuncios_Administrador.php" class="btn btn-default btn-sm" style="color:green"><span class="glyphicon glyphicon-plus"></span> Nuevo Registro </a>

<table style="border-width:2px; border-style: solid;" class="table table-hover"">
<thead>
	<tr>
		<td><b>ID</b></td>
		<td><b>Nombres</b></td>
		<td><b>Fecha</b></td>
		<td><b></b></td>
	</tr>
</thead>
<tbody>
<?php
	include("app/conexion.php");
	$query = "SELECT * FROM anuncios";
	$resultado = $conexion->query($query);
	$row = $resultado;

	while($row = $resultado->fetch_assoc())
	{
	
?>
	<tr>
		<td><?php echo $row['IDAnun'];?></td>
		<td><img src="<?php echo $row['ImagenA'];?>"></td>
		<td><?php echo $row['Fecha'];?></td>

	
		<td><a href="ModificarFormAnuncios_Adminitrador.php?cod= <?php echo $row['IDAnun'];?>" class="btn btn-default btn-sm" style="color:blue" ><span class="glyphicon glyphicon-pencil"></span> Editar</a>
		
		<a href="EliminarFormAnuncios_Adminitrador.php?cod= <?php echo $row['IDAnun'];?>" class="btn btn-default btn-sm" style="color:red"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
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