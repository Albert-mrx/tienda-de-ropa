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

<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='POST'>
<?php
		include 'conexion/on.php';
		$sql="SELECT * FROM productos";
		$res=$conexion->query($sql);
		$sel="<select id='elimsel' name='elimsel'>";
		while($fila=$res->fetch_array())
		{
			$sel.='<option value="'.$fila['id'].'" >'.$fila['nombre'].'</option>';
		}
		$sel.='</select>';
		echo $sel;
		
?>
<input type="submit" value="Eliminar">
</form>
<?php
		
		if(isset($_POST['elimsel']))
		{
			$id=$_POST['elimsel'];
			$sql2="DELETE FROM productos WHERE id='".$id."';";
			$res2=$conexion->query($sql2);
			if($res2):
				echo '<p>Eliminado Correctamente</p>';
?>
<script>
	setTimeout(function(){
		location.reload();
	},2000);
</script>
<?php
			else:
				echo '<p>No se pudo Eliminar</p>';
			endif;
		}

 ?>

 <? include 'footer.php'; ?>