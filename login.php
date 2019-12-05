<?php
	include 'header.php';
?>
<article>
<div class='container '>
<fieldset class='form-group'>
<div class="row">
	<div class="col-4">
<form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
<label>Usuario</label><br/>
<input type='text' name='usuario'><br>
<label>Contraseña</label><br>
<input type='password' name='contsna'><br>
<input type='submit' name='enviarlog' id='button1' value='Inicia' class="btn btn-default">
    </div>
</form>
</div>
</fieldset>
</div>
<a href='registraus.php'>Registrarte</a>
<?php
if(isset($_POST['usuario'])&&isset($_POST['contsna']))
{
	$user=$_POST['usuario'];
	$pass=sha1($_POST['contsna']);
	include 'conexion/on.php';
	$sql="SELECT * FROM login WHERE usuario='".$user."' AND pass='".$pass."';";
	$res=$conexion->query($sql);
	$fila=$res->fetch_array();
	
	if($res->num_rows)
	{
		session_start();
		$_SESSION['usuario']=$user;
		echo "<p>Bienvenido: ".$fila['usuario']. "</p><br/>";
		$menu= "<ul>
				<li><a href='logout.php'>Cerrar Sesion</a></li></ul>";
		echo $menu;
		include 'conexion/off.php';
		header('Location: index.php');
	}
	else{
		echo "<p>Contraseña Incorrecta</p>";
	}
}

?>
</article>
<?php
	include 'footer.php';
?>