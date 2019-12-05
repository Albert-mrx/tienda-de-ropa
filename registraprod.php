<?php include 'header.php'; ?>
<?php
 session_start();
 if(!isset($_SESSION['usuario']))
 {
	header("Location: login.php");
	exit();
 }
else
{
	echo "<h2>Bienvenido</h2>";
	echo "<a href='logout.php'>Cerrar Sesion</a>";
}
?>


<article>
<div class='container'>
	<div class="row">
		<div class="col-4"></div>
		<form name='regprod' action='enviar/enviaprod.php' method='POST' role="form">
		<fieldset class="form-group">
			<label>Ingresa Nombre producto</label><br>
			<input type='text' name='nomprod' required><br/>
			<label>Ingresa Stock</label><br>
			<input type='text' name='stock' required><br>
			<label>Ingresa Tipo</label><br>
			<input type='text' name='tipo' required><br>
			<label>Ingresa Precio</label><br>
			<input type='text' name='precio' required><br>
			<label>Enlace Imagen</label><br>
			<input type='text' name='imagen'required><br>
			<input type='submit' name='envprod' value='Registra'>
		</fieldset>
		</form>
	</div>
</div>
</article>
<?php include 'footer.php' ?>