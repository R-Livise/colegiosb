<!--EliminarFormAnuncios_Adminitrador.php -->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>
<?php
	include("app/conexion.php");
	//LEE EL PARAMETRO
	$codigo = $_REQUEST['cod'];
	//CONSULTAMOS LOS DATOS DEL ALUMNO
	$query = "SELECT * FROM Anuncios WHERE IDAnun = ".$codigo;
	//echo $query;
	$resultado = $conexion->query($query);
	$row = $resultado->fetch_assoc();
	//MOSTRAMOS LOS DATOS DEL ALUMNO
?>
<div class="container ">
<h2>Modificar noticia</h2>
	<form action='EliminarAnuncios_Adminitrador.php' method='POST' class="row eleminiar" enctype="multipart/form-data">
		<div class="col-xs-6" style="text-align: right; ">
			<label for="Imagen">Imagen : </label><br>
		</div>
		<div class="col-xs-6" style="text-align: left; max-width: 400px;" >

			<img src="<?php echo $row['ImagenA']; ?>">
			<input type="text" name="IDAnun"  id="IDAnun" class="form-control" value="<?php echo $row['IDAnun']; ?>" style="visibility: hidden;">

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