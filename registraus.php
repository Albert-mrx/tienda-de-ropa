<?php include 'header.php'; ?>
<?php include 'on.php';?>
<article>
	<form action='enviar/enviauser.php' method='POST'>
		<label>Ingresa Nombre</label><br/>
		<input type='text' name='nombre' required><br/>
		<label>Ingresa contraseña</label><br/>
		<input type='password' name='pass' required><br/>
		<label>Repite contraseña</label><br/>
		<input type='password' name='rpass' required><br/>
		<label>Ingresa Email</label><br/>
		<input type='email' name='mail'><br/>
		<input type='submit' name='envprod' value='Registrate'><br/>
	</form>
	<?php
		$reg=mysqli_query($conexion,"insert into usuarios(nombre,password,password1,email)values()")

	?>
</article>

<?php include 'footer.php' ?>