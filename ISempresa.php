<!DOCTYPE html>
<html>
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
					      <a class="navbar-brand" id="banNav" href="index.html"><img id="logo" src="iu/image/inonBanner2.png"></a>
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
					        <li><a href="index.html">Menu Principal</a></li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
				<div id="iniSU">
					<img src="iu/image/fonIsu.png">
					<center><p id="letIS">Iniciar Sesión Empresarial</p></center>
					<div id="is">
						<form role="form" id="inSE" name="inSE" method="Post" action="ISempresa.php">
							<?php
								if (isset($_POST["bingE"])) {
									$connection = mysqli_connect('localhost', 'root', '','inon');
									$emOus=$_POST["emOus"];
									$clave=$_POST["pwd"];
									$_SESSION['var']=0;
									$query="call iniciarSesionE('".$emOus."','".$clave."');";
									$result=mysqli_query($connection, $query);
									$row=mysqli_fetch_assoc($result);
									if ($row['val']==1) {
										$_SESSION['userid']=$row['idEm'];
										$_SESSION['usuarioNom']=$row['nombre']." ".$row['apellido'];
										$_SESSION['user']=$row["userEm"];
										echo "<script> alert('Inicio de Sesión Exitoso') 
										document.location=('indexUserE.php') </script>";	
									}
									else{
										$_SESSION['var']=1;
									}
								};
							?>
						  <div class="form-group">
						    <label for="email">Correo Electronico o Usuario:</label>
						    <input type="text" class="form-control" id="emOus" name="emOus">
						    <a id="recUC" href="#">¿Ha olvidado su Nombre de Usuario?</a>
						  </div>
						  <div class="form-group">
						    <label for="pwd">Contraseña:</label>
						    <input type="password" class="form-control" id="pwd" name="pwd">
						     <a id="recUC" href="#">¿Ha olvidado su Contraseña?</a>
						  </div>
						  <center><button type="submit" class="btn btn-default" id="bingE" name="bingE">Ingresar</button></center>
						</form>
						<?php
							if ($_SESSION['var']==1) {
							 	echo "<br><div class='alert alert-danger' role='alert' id='AlertIS'>Correo Electronico/Usuario o Contraseña Incorrecta</div>";
							 	$_SESSION['var']=0;
							 } 
						?>
					</div>
					<hr id="dec">
					<p id="infoL">Este Sitio esta destinado unicamente a usuarios de Inon y se encuetra sujeto a las normativas establecidas por los creadores y el querido profesor.</p>
				</div>
				<div id="final">
					<hr>
					<br>
					Todos los derechos Reservados ©
				</div>
			</div>
	</body>
</html>