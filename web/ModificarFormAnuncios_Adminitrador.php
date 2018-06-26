<!--ModificarFormAnuncios_Adminitrador.php-->
<?php
	include("masterHeader-inicioAministradorMaster.php");
	include("app/validar_sesion.php");
?>
<?php
	include("app/conexion.php");
	//LEE EL PARAMETRO
	$codigo = $_REQUEST['cod'];
	//CONSULTAMOS LOS DATOS DEL ALUMNO
	$query = "SELECT * FROM anuncios WHERE IDAnun = ".$codigo;
	//echo $query;
	$resultado = $conexion->query($query);
	$row = $resultado->fetch_assoc();
	//MOSTRAMOS LOS DATOS DEL ALUMNO 
?>
<br/>
<br/>
	<h2>Modificar noticia</h2>
	<form action='ModificarAnuncios_Administrador.php' method='POST' class="row eleminiar" enctype="multipart/form-data">
		<div class="col-xs-6" style="text-align: right; ">

			<label for="ImagenA">Imagen : </label><br>
		
		</div>
		<div class="col-xs-6" style="text-align: left; max-width: 400px;" >

			<input type="file" name="ImagenA"  id="ImagenA" class="form-control">

			<img src="<?php echo $row['ImagenA']; ?>">
			<input type="text" name="IDAnun"  class="form-control" value="<?php echo $row['IDAnun']; ?>" style="visibility: hidden;">
			<input type="text" name="ImagenAn" class="form-control" value="<?php echo $row['ImagenA']; ?>" style="visibility: hidden;">
		<input type="submit" name="Modificar">
		</div>

	</form>
<br/>
<br/>
<?php
	include("footer-master.php");
?>