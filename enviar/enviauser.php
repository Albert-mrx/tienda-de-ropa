<? include '../header.php'; ?>
<?php
	
		if($_POST['pass']==$_POST['rpass']):
			$nombre=$_POST['nombre'];
			$pass=sha1($_POST['pass']);
			$mail=filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL);
		include '../conexion/on.php';
		$sql="INSERT INTO login (usuario,pass,mail) values ('$nombre','$pass','$mail');";
		$res=$conexion->query($sql);
		if($res)
		{
			echo "<p>Registrado Correctamente";
	?>
		<script>
			setTimeout(function(){
				location.href='../login.php';
			},2000);
		</script>
<?php
		}
		else
		{
			echo "<p>No se pudo registrar</p>";
			echo $conexion->error;
		};
		else:
	echo "<p>Las contraseñas no coinciden</p><br/>";
	?>
		<script>
			setTimeout(function(){
				location.href='../registraus.php';
			},2000);
		</script>
		<?php
		endif;
	include '../conexion/off.php';
	
 ?>
 <? include '../footer.php'; ?>