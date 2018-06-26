<!--formulario_Padres.php-->
<?php
	include("header-master.php");
?>
</haeder>
<main>
	<section  >
		<br/><br/>
		<h2>Ingreasa tu usuario</h2>
			<form class="formulario" name="formulario" method="get" action="inicio_padres.php" onsubmit="return conmetario()">
				<label for="Codigo">Codigo:</label>
				<input type="text" class="form-control escrib" name="Codigo" id="Codigo" placeholder="Escriba su usuario">
				<br/><br/>
				<label for="Contrasena">Contraseña:</label>
				<input type="text" class="form-control escrib" name="Contrasena" id="Contrasena" placeholder="Contrasenas">
				<br/>
				<br/>
				<input type="submit" class="enviar" value="Enviar">
				<input type="reset" class="enviar" value="Cancelar">
				<br/>
			</form>
			<br/><br/>
	</section>
</main>
<?php
	include("footer-master.php");
?>