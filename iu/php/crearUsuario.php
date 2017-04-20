<?php
if (isset($_POST["regU"])) {
$connection = mysqli_connect('localhost', 'root', '','inon');
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$genero=$_POST["genero"];
$fechaN=$_POST["fechaN"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$pais=$_POST["pais"];
$ciudad=$_POST["ciudad"];
$usuario=$_POST["usuario"];
$email=$_POST["email"];
$password=$_POST["password"];
$tarjeta=$_POST["tarjeta"];
$tipoT=$_POST["tipoT"];
$cvc=$_POST["cvc"];
$fechaV=$_POST["fechaV"];
$queryUs="select usuarioCliente from usuario where usuarioCliente='".$usuario."';";
$queryEm="select emailCliente from usuario where emailCliente='".$email."';";
$result=mysqli_query($connection, $queryUs);
$result2=mysqli_query($connection, $queryEm);
if (mysqli_num_rows($result)>0) {
	echo "<html>";
	echo "<body>";
	echo "<script> alert('Usuario Ya Existe') 
	document.location=('../../userN.php') </script>";
	echo "</body>";
	echo "</html>";
}
elseif (mysqli_num_rows($result2)>0) {
	echo "<html>";
	echo "<body>";
	echo "<script> alert('Correo ya Existe') 
	document.location=('../../userN.php') </script>";
	echo "</body>";
	echo "</html>";
}
else
{
	$query="insert into direccion (direccion, idCiudad) values ('".$direccion."','".$ciudad."')";
	$query2="insert into usuario (nombreCliente, apellidoCliente, telefonoCliente, emailCliente, claveCliente, tarjetaCliente, cumpleCliente, generoCliente, tipoTarjeta, codigoCVC, fechaVT, usuarioCliente) values('".$nombre."','".$apellido."','".$telefono."','".$email."','".$password."','".$tarjeta."','".$fechaN."','".$genero."','".$tipoT."','".$cvc."','".$fechaV."','".$usuario."')";
	$query3="insert into direccion_usuario (idCliente, idDireccion) values (LAST_INSERT_ID(),(select max(idDireccion) from direccion))";
	mysqli_query($connection, $query);
	mysqli_query($connection, $query2);
	mysqli_query($connection, $query3);
	mysqli_close($connection);
	echo "<html>";
	echo "<body>";
	echo "<script> alert('Cuenta Creada con Satisfacción') 
	document.location=('../../index.html') </script>";
	echo "</body>";
	echo "</html>";
}
};
?>