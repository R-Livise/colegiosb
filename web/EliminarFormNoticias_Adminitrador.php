<!--EliminarFormNoticias_Adminitrador.php -->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>
<?php
	include("app/conexion.php");
	//LEE EL PARAMETRO
	$codigo = $_REQUEST['cod'];
	//CONSULTAMOS LOS DATOS DEL ALUMNO
	$query = "SELECT * FROM Noticias WHERE IDNoti = ".$codigo;
	//echo $query;
	$resultado = $conexion->query($query);
	$row = $resultado->fetch_assoc();
	//MOSTRAMOS LOS DATOS DEL ALUMNO
?>
<div class="container ">
<h2>Modificar noticia</h2>
	<form action='EliminarNoticias_Adminitrador.php' method='POST' class="row eleminiar" enctype="multipart/form-data">
		<div class="col-xs-6" style="text-align: right; ">
			<label for="Titulo" >Título : </label><br>
			<label for="Autor">Autor: </label><br>
			<label for="Parrafo1">Parrafo 1 : </label><br><br><br><br><br>
			<label for="Parrafo2">Parrafo 2 : </label><br><br><br><br><br>
			<label for="Parrafo3">Parrafo 3 : </label><br><br><br><br><br>	
			<label for="Imagen">Imagen : </label><br>
		</div>
		<div class="col-xs-6" style="text-align: left; max-width: 400px;" >

			<input type="text" name="Titulo"  id="Titulo" class="form-control" value="<?php echo $row['Titulo']; ?>">
			
			<input type="text" name="Autor" id="Autor" class="form-control"	value="<?php echo $row['Autor']; ?>">
			
			<textarea type="text" rows="5" name="Parrafo1" id="Parrafo1" class="form-control" ><?php echo $row['Parrafo1']; ?></textarea>
			
			<textarea type="text" rows="5" name="Parrafo2" id="Parrafo2" class="form-control" ><?php echo $row['Parrafo2']; ?></textarea>
			
			<textarea type="text" rows="5" name="Parrafo3" id="Parrafo3" class="form-control" ><?php echo $row['Parrafo3']; ?></textarea>

			<img src="<?php echo $row['Imagen']; ?>">
			<input type="text" name="IDNoti"  id="IDNoti" class="form-control" value="<?php echo $row['IDNoti']; ?>" style="visibility: hidden;">

		<h3>¿Desea Eliminar el Registro?</h3>
		</br>
		<input type="submit" name="Eliminar" value="Eliminar">
		</div>
		


	</form>
</div>
<br/>
<?php
	include("footer-master.php");
?>