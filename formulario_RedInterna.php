<!--formulario_redInterna.php-->
<?php
	include("header-master.php");
?>
<main>
	<section  >
		<br/><br/>
		<h2>Ingreasa tu usuario</h2>
			<form class="formulario" name="formulario" method="get" action="inicio_Administrador.php" onsubmit="return conmetario()">
				<label for="Usuario">Usuario:</label>
				<input type="text" class="form-control escrib" name="Usuario" id="Usuario" placeholder="Escriba su usuario">
				<br/><br/>
				<label for="Contrasena">Contraseña:</label>
				<input type="password" class="form-control escrib" name="Contrasena" id="Contrasena" placeholder="Contrasenas">
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