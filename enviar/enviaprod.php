<? include '../header.php' ?>
<?php
	include '../conexion/on.php';
			$nomprod=$_POST['nomprod'];
			$stck=$_POST['stock'];
			$tip=$_POST['tipo'];
			$prec=$_POST['precio'];
			$img=$_POST['imagen'];
			
			$sql="INSERT INTO productos (nombre,stock,tipo,precio,enlcimg) values('$nomprod','$stck','$tip','$prec','$img');";
			$res=$conexion->query($sql);
			if($res):
			echo "<p>Registrado correctamente</p>";
			?>
			<script>
				setTimeout(function(){
					location.href='../registraprod.php';
				},3000);
			</script>
			<?php
			else:
			echo "<p>No se pudo registrar</p>";
			endif;
	include '../conexion/off.php';
?>
<? include '../footer.php' ?>