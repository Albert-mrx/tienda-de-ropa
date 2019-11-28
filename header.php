<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<script src='js/jquery.js' type='text/javascript'></script>
		<script src='js/bootstrap.min.js' type='text/javascript'></script>
		<link href='css/css.css' rel='stylesheet' type='text/css'>
		<link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
		<link href='css/bootstrap-theme.min.css' rel='stylesheet' type='text/css'>
		
		<title>Tienda Ropa Online</title>
	</head>
	
	<body>
	<header>
		<img src='' id='cab'>
		<h1>Tienda de Ropa</h1>
		<nav class="navbar navbar-inverse" role="navigation" id="supmenu">
			<ul class="nav nav-pills">
				<li class="active"><a href='index.php'>Inicio</a></li>
				<li><a href='productos.php'>Productos</a></li>
				<li class="dropdown" role="presentation"><a lass="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administrador</a>
					<ul class="dropdown-menu">
						<li><a href='registraprod.php'>RegistrarProducto</a></li>
						<li><a href='eliminaprod.php'>EliminaProducto</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	