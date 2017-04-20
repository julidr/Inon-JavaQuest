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
								<li><a href="#">Categoria 1</a></li>
								<li><a href="#">Categoria 2</a></li>
								<li><a href="#">Categoria 3</a></li>
								<li><a href="#">Categoria 4</a></li>
								<li><a href="#">Categoria 5</a></li>
							  </ul>
					        </li>
					        <li id="textNav">Tiendas:</li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Todo <span class="caret"></span></a>
					          <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
								<li><a href="#">Categoria 1</a></li>
								<li><a href="#">Categoria 2</a></li>
								<li><a href="#">Categoria 3</a></li>
								<li><a href="#">Categoria 4</a></li>
								<li><a href="#">Categoria 5</a></li>
							  </ul>
					        <li><a href="#">Conocenos</a></li>
					        <li><a href="index.html">Menu Principal</a></li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
				<div id="ImagenCen" name="ImagenCen">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol id="deslizadores "class="carousel-indicators">
					      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					      <li data-target="#myCarousel" data-slide-to="1"></li>
					      <li data-target="#myCarousel" data-slide-to="2"></li>
					      <li data-target="#myCarousel" data-slide-to="3"></li>
					    </ol>
					    <div class="carousel-inner" role="listbox">
					      <div class="item active">
					        <img src="iu/image/prueba.png" alt="Chania">
					      </div>
					      <div class="item">
					        <img src="iu/image/PRUEBA2.png" alt="Chania">
					      </div>

					    </div>
					</div>
				</div>
				<br> 
				<hr>
				
				<div id="formularioUN" >
					<form id="infPer" name="infPer" role="form" method="POST" action="iu/php/crearUsuario.php">
			             	<div id="FormularioN1" name="FormularioN1" class="col-md-6">
				                  <fieldset id="field">
				                    <center><legend>Informacion Personal</legend></center><br>
				                    <label>Nombre</label><input type="text" class="form-control" id="nombre" name="nombre"><br>
				                    <label>Apellido</label><input type="text" class="form-control" id="apellido" name="apellido"><br>
				                    <label>Genero</label>  
				                    <select class="form-control" id="sel1" name="genero">
					                    <option value="1">Masculino</option>
					                    <option value="2">Femenino</option>
				                  	</select><br>
				                    <label>Fecha de Nacimiento</label><input type="date" class="form-control" id="fechaN" name="fechaN"><br>
				                    <center><legend>Informacion de Ubicacion </legend></center><br>
				                    <label>Direccion</label><input type="text" class="form-control" id="direccion" name="direccion"><br>
				                    <label>Telefono</label><input type="text" class="form-control" id="telefono" name="telefono"><br>
				                    <label>Pais</label>
				                    <?php
										$connection = mysqli_connect('localhost', 'root', '','inon');
										$query="select nombrePais from pais";
										$result=mysqli_query($connection, $query);
										$cont=1;
										echo " <select class='form-control' id='sel1' name='pais'>";
										while ($row = mysqli_fetch_assoc($result)){
												echo "<option value='".$cont."'>".$row['nombrePais']."</option>";
												$cont=$cont+1;
										}
										echo "</select><br>";
									?>
				                    <label>Ciudad</label>
				                   	<?php
										$connection = mysqli_connect('localhost', 'root', '','inon');
										$query="select nombreCiudad from ciudad";
										$result=mysqli_query($connection, $query);
										$cont2=1;
										echo " <select class='form-control' id='sel1' name='ciudad'>";
										while ($row = mysqli_fetch_assoc($result)){
												echo "<option value='".$cont2."'>".$row['nombreCiudad']."</option>";
												$cont2=$cont2+1;
										}
										echo "</select><br>";
									?>
									<br>
				                  </fieldset>
			              	</div>

				            <div id="FormularioN2" name="FormularioN1" class="col-md-6" >
				                  <fieldset id="field">
				                    <center><legend>Informacion de Usuario </legend></center><br>
				                    <label>Usuario</label><input type="text" class="form-control" id="usuario" name="usuario" ><br>
				                    <label>Email</label><input type="email" class="form-control" id="email" name="email"><br>
				                    <label>Repetir Email</label><input type="email" class="form-control" id="remail" name="remail"><br>
				                    <label>Contraseña</label><input type="password" class="form-control" id="password" name="password"><br>
				                    <center><legend>Informacion de Pago </legend></center><br>
				                    <label>Tipo de Tarjeta</label>
				                    <select class="form-control" id="sel1" name="tipoT">
					                    <option>Visa</option>
					                    <option>MasterCard</option>
					                    <option>Dinner</option>
					                    <option>American Express</option>
				                  	</select><br>
				                    <label>Numero de Tarjeta</label><input type="text" class="form-control" id="tarjeta" name="tarjeta"><br>
				                    <label>Codigo CVC</label><input type="password" class="form-control" id="cvc" name="cvc"><br>
				                    <label>Fecha de Vencimiento</label><input type="date" class="form-control" id="fechaV" name="fechaV"><br><br>
				                   </fieldset>
				             </div>
				         <center><button type="submit" class="btn btn-default" id="regU" name="regU">Registrar</button></center>    
					</form>
			</div>

				<div id="final">
					<hr>
					<br>
					Todos los derechos Reservados ©
				</div>
			</div>
	</body>
</html>