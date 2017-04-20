<?php
if (isset($_POST["subir"])) {
	$connection = mysqli_connect('localhost', 'root', '','inon');
	session_start();
    $_SESSION['img']="iu/image/".basename( $_FILES['cargar']['name']);
	$query="update usuario set imagenCliente='".$_SESSION['img']."' where idCliente='".$_SESSION['userid']."';";
	mysqli_query($connection, $query);
	mysqli_close($connection);
	echo "<script> alert('Carga Completada') 
	document.location=('ImgUser.php') </script>";	
	}
elseif (isset($_POST["subirE"])) {
	$connection = mysqli_connect('localhost', 'root', '','inon');
	session_start();
    $_SESSION['img']="iu/image/".basename( $_FILES['cargarE']['name']);
	$query="update empleado set imagenEmpleado='".$_SESSION['img']."' where idEmpleado='".$_SESSION['userid']."';";
	mysqli_query($connection, $query);
	mysqli_close($connection);
	echo "<script> alert('Carga Completada') 
	document.location=('ImgUserE.php') </script>";	
}
?>