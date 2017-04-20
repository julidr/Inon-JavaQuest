<?php
if (isset($_POST["regE"])) {
$connection = mysqli_connect('localhost', 'root', '','inon');
$usuario=$_POST["usuario"];
$email=$_POST["email"];
$password=$_POST["password"];
$nombreEmp=$_POST["nomEmp"];
$pais=$_POST["pais"];
$ciudad=$_POST["ciudad"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$emailEmp=$_POST["emailEmp"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telefonoEm=$_POST["telefonoEm"];
$genero=$_POST["genero"];
$fechaN=$_POST["fechaN"];
$tipoT=$_POST["tipoT"];
$tarjeta=$_POST["ntarjeta"];
$cvc=$_POST["cvc"];
$fechaV=$_POST["fechaV"];
$queryUs="select usuarioEmpleado from empleado where usuarioEmpleado='".$usuario."';";
$queryTi="select nombreTienda from tienda where nombreTienda='".$nombreEmp."';";
$queryEm="select correoEmpleado from empleado where correoEmpleado='".$emailEmp."';";
$result=mysqli_query($connection, $queryUs);
$result2=mysqli_query($connection, $queryTi);
$result3=mysqli_query($connection, $queryEm);
if (mysqli_num_rows($result)>0) {
	echo "<html>";
	echo "<body>";
	echo "<script> alert('Usuario Ya Existe') 
	document.location=('../../userE.php') </script>";
	echo "</body>";
	echo "</html>";
}
elseif (mysqli_num_rows($result2)>0) {
	echo "<html>";
	echo "<body>";
	echo "<script> alert('Tienda ya Existente') 
	document.location=('../../userE.php') </script>";
	echo "</body>";
	echo "</html>";
}
elseif (mysqli_num_rows($result3)>0) {
	echo "<html>";
	echo "<body>";
	echo "<script> alert('Correo Ya existe') 
	document.location=('../../userE.php') </script>";
	echo "</body>";
	echo "</html>";
}
else
{
	$query="insert into tienda (nombreTienda, emailTienda, tarjetaTienda, tipoTarjeta, codigoCVC, fechaVT) values ('".$nombreEmp."','".$emailEmp."','".$tarjeta."','".$tipoT."','".$cvc."','".$fechaV."')";
	$query2="insert into empleado (nombreEmpleado, idTienda, apellidoEmpleado, tipoEmpleado, clave, claveLocal, telefonoEmpleado, correoEmpleado, usuarioEmpleado, generoEmpleado) values ('".$nombre."',(select max(idTienda) from tienda),'".$apellido."','1','".$password."','".$password."','".$telefonoEm."','".$email."','".$usuario."','".$genero."')";
	$query3="insert into direccion (direccion, idCiudad) values ('".$direccion."','".$ciudad."')";
	$query4="insert into direccion_tienda (idTienda, idDireccion, telefono) values ((select max(idTienda) from tienda),(select max(idDireccion) from direccion),'".$telefono."')";
	mysqli_query($connection, $query);
	mysqli_query($connection, $query2);
	mysqli_query($connection, $query3);
	mysqli_query($connection, $query4);
	mysqli_close($connection);
	echo "<html>";
	echo "<body>";
	echo "<script> alert('Cuenta creada con Satisfacción') 
	document.location=('../../index.html') </script>";
	echo "</body>";
	echo "</html>";
}
};
?>