<?php include 'header.php' ?>
<article>
<?php

	include 'conexion/on.php';
	$sql="SELECT * FROM productos";
	$res=$conexion->query($sql);
	if($res):
		$tab='';
		while($fila=$res->fetch_array())
		{
			$tab.='<table class="table table-bordered">';
			$tab.='<tr><td colspan="2">'.$fila['nombre'].'</td></tr><tr><td>Precio</td><td>'.$fila['precio'].'S/:</td></tr>
			<tr><td>Stock</td><td>'.$fila['stock'].' Unid </td></tr><tr><td colspan="2"><img src="'.$fila['enlcimg'].'" id="imgprod"></td></tr>
			<tr><td><input type="button" value="Comprar" id="'.$fila['id'].'" class="btn btn-default" onclick="compra(this.id);"></td></tr></table>';
		}
		echo $tab;
	else:
		echo "<p>Error al recibir productos</p>";
	endif;

?>
<div id="res"></div>
<script>
	function compra(id)
	{
		var rec=id;
		$.ajax({
			data: "id="+id,
			type: "POST",
			url: 'enviar/compra.php',
			success: function(data)
			{
				$('#res').html(data);
				setTimeout(function(){
					location.reload();			
				},2000);
			}
			
				
		});
	}
</script>
   <section>
		<img src="imagenes/p1">
   </section>

</article>
<?php include 'footer.php'; ?>