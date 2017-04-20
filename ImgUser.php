<!DOCTYPE html>
<html>
<head>
<head>
	<meta charset="utf-8" /> 
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
  	<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
  	<script type="text/javascript" src="iu/js/java.js"></script>
  	<title aling="left">INON</title>
  	<link href="iu/image/shortcutIcon.png" rel="shortcut icon">


	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="iu/css/estilo.css">
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
								echo "<li><a href='PerfilUser.php'>Mi perfil</a></li>";
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
				<div id="userEsp">
					<div id="izq">
						<center><img src="iu/image/inon perfiles.png"></center>
						<div class="list-group">
						  <a href="PerfilUser.php" class="list-group-item">Información de Perfil</a>
						  <a href="ImgUser.php" class="list-group-item active">Cambiar Imagen</a>
						  <a href="#" class="list-group-item">Editar Información</a>
						  <a href="#" class="list-group-item">Eliminar Cuenta</a>
						</div>
					</div>
					<div id="der">
						<center><p id="infP">Cambiar Imagen de Perfil</p></center> <br>
						<hr id="prf">
						<center><?php
						 if (is_null($_SESSION['img']) or $_SESSION['img']=="NULL") {
							echo "<img id='imgP2'src='iu/image/usuario.png'>";
						}
						else{
							echo "<img id='imgP2'src='".$_SESSION['img']."'>";
						}
						?></center>
						<center><form enctype="multipart/form-data" action="uploader.php" method="POST" id="cargarImg">
							<input name="cargar" type="file" id="cargar" /> <br>
							<input type="submit" value="Subir archivo" name="subir"/>
						</form></center>
						<hr id="prf">
						<center><p style="margin-top:50px">Ninguna imagen es alojada en la web ni es utilizada sin el concentimiento de los usuarios, esta solamente esta para poder identificarlos</p></center>
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