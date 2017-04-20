<!DOCTYPE html>
<html>
<head>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
  	<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
  	<script type="text/javascript" src="iu/js/java.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8">
	<meta name="author" content="Juliana Diaz, Felix Moreno, Steven Puerto">

	<title aling="left">INON</title>


	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="iu/css/estilo.css">

	<link href="iu/image/shortcutIcon.png" rel="shortcut icon">


	<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0; maximum-scale=4.0; user-scalable=yes">
</head>
	<body>
		<?php
		session_start();
	?>
			<div id="ContenedorPrincipal" name="ContenedorPrincipal" allign="center">
				<div id="Barra1" name="Barra1">
					<nav class="navbar navbar-inverse" id="navBar">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" id="banNav" href="indexUserE.php"><img id="logo" src="iu/image/inonBanner2.png"></a>
					    </div>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav" id="navUl">
					        <li id="textNav">Busca un producto aqui:</li>
					        <form class="navbar-form navbar-left" role="search">
					        <div class="form-group">
					          <input type="text" class="form-control" placeholder="Search">
					        </div>
					        <button type="submit" class="btn btn-default">Buscar</button>
					      </form>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
					          <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
								<li><a href="#">Tecnologia</a></li>
								<li><a href="#">Ropa</a></li>
								<li><a href="#">Hogar</a></li>
								<li><a href="#">Escolar</a></li>
								<li><a href="#">Videojuegos</a></li>
							  </ul>
					        </li>
					        <li id="textNav">Tiendas:</li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Todo <span class="caret"></span></a>
					          <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
								<li><a href="#">Tecnologia</a></li>
								<li><a href="#">Ropa</a></li>
								<li><a href="#">Hogar</a></li>
								<li><a href="#">Escolar</a></li>
								<li><a href="#">Videojuegos</a></li>
							  </ul>
							</li>
							<li><a href="#">Conocenos</a></li>
					        <li id="textNav">Bienvenido: </li>
					        <?php
					        	echo"<li class='dropdown'>";
					          	echo "<a href='#'' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>".$_SESSION['usuarioNom']."<span class='caret'></span></a>";
					          	echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenu4'>";
								echo "<li><a href='PerfilUserE.php'>Mi perfil</a></li>";
								echo "<li><a href='ventanaTienda.php'>Mi Tienda</a></li>";
								echo "<li><a href='#'>Ayuda</a></li>";
								echo "<li><a href='index.html'>Cerrar Sesión</a></li>";
							  	echo "</ul>";
								echo "</li>";
					        ?>
					       <li><a href="#"><img src="iu/image/carrito.png">&nbsp Carrito</a></li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
				<br>
				<div id="infoTiendas">
					<div id="izqTiendas">
						<div id="logoE"> <img src="iu/image/usuario.png"></div>
						<hr>
						<br>
						<label id="nombreT">Nombre: </label><?php echo " ".$_SESSION['tienda'];?><br><br>
						<label id="direccionT">Direccion: </label><?php echo " ".$_SESSION['direccion'];?> <br><br>
						<label id="telefonoT">Telefono de la Tienda: </label><?php echo " ".$_SESSION['telefonoT'];?> <br><br>
						<label id="correoT">Email: </label><?php echo " ".$_SESSION['emailEm'];?> <br><br>
						<label id="descripcionT">Descripción: </label><?php echo " ".$_SESSION['descripcion'];?> <br>

						<div id="qr">
							<br>
							<center><button type="submit" class="btn btn-default btn-lg" id="bueno" name="bueno"><img src="iu/image/bueno.png"></button>
								&nbsp;&nbsp;
							<button type="submit" class="btn btn-default btn-lg" id="malo" name="malo"><img src="iu/image/malo.png"></button></center>
						</div>
					</div>
					&nbsp;
					<div id="dere" style="overflow:auto;">
						<br>
						<legend><center><h1>Inventarios Disponible</h1></center></legend>

						<center><table id="tablaD" name="tablaD" class="table table-hover">
						    <thead>
						      <tr>
						        <th>Nombre Producto</th>
						        <th>Descripcion del Producto</th>
						        <th>Cantidad Disponible</th>
						        <th>Precio (COP)</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?php
										$connection = mysqli_connect('localhost', 'root', '','inon');
										$query="call ObtenerPro('".$_SESSION['idT']."');";
										$result=mysqli_query($connection, $query);
										while ($row = mysqli_fetch_assoc($result)){
											echo "<tr><td><a href='#'>".$row['nombre']."</a></td>";
											echo "<td>".$row['descripcion']."</td>";
											echo "<td>".$row['cantidad']."</td>";
											echo "<td>".$row['valorUnitario']."</td>";
											echo "</tr>";
										}
									?>
						      
						    </tbody>
						 </table></center>
					</div>
				</div>


				<div id="final">
					<hr>
					<br>
					Todos los derechos Reservados ©
				</div>
			</div>
	</body>
</html>