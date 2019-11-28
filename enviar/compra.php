<?php
include '../conexion/on.php';
			$id=$_POST['id'];
			echo $id;
			$sqls="SELECT * FROM productos WHERE id='".$id."';";
			$res3=$conexion->query($sqls);
			$fila2=$res3->fetch_array();
			$stck=$fila2['stock']-1;
			$sql2="UPDATE productos SET stock='".$stck."'WHERE id='".$id."';";
			$res2=$conexion->query($sql2);
			if($res2):
			
				echo "<P>Comprado existosamente</p>";
				
			else:
				echo "<p>Fallo al Comprar</p>";
			endif;

 ?>