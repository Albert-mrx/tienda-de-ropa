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
   <section >
		<img src="">
   </section>

</article>
<section>
	<ul>
		<strong><li>polos</li><br></strong>
		 <img src="imagenes/p1.jpg">
		 <img src="imagenes/p2.jpg">
		 <img src="imagenes/p3.jpg">
        <hr/>
		<strong><li>camisas</li><br></strong>
		<img src="imagenes/m1.jpg">
		<img src="imagenes/m2.jpg">
		<img src="imagenes/m3.jpg">
		<img src="imagenes/m4.jpg">
		<img src="imagenes/m5.jpg">
		<img src="imagenes/m6.jpg">
		<img src="imagenes/m7.jpg">
		<img src="imagenes/m9.jpg">
		<hr/>
		<strong><li>pantalones</li><br></strong>
		<img src="imagenes/p.jpg"> 
		<img src="imagenes/p40.jpg">
		<img src="imagenes/p50.jpg">
		<img src="imagenes/p60.jpg">
		<img src="imagenes/p70.jpg">
		<img src="imagenes/p10.jpg">
		<img src="imagenes/p20.jpg">
		<strong><li >chompas</li><br></strong>
		<hr/>
		<img src="imagenes/c1.jpg">
		<img src="imagenes/c2.jpg">
		<img src="imagenes/c3.jpg">
		<img src="imagenes/c4.jpg">
		<img src="imagenes/c5.jpg">
		<img src="imagenes/c6.jpg">
			
	</ul>

</section>
<?php include 'footer.php'; ?>