<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
$host="localhost";
$usuario="root";
$contraseña="";
$base="tastywings";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> 
		mysqli_connect_error());
}

$nombre = $_POST['inputNombre'];
$precio = $_POST['inputPrecio'];

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$res=$conexion->query("insert into producto (Nombre,Precio) values('$nombre', '$precio')");
if($res){
echo 'Accion exitosa.';
}
?>

