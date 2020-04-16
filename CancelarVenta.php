<?php
error_reporting(0);
header('Content-type: application/json; charset=utf-8');
$var = $_POST['id'];
$conexion = new mysqli('localhost', 'root', '', 'tastywings');

if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("DELETE FROM ventas WHERE VentaID = $var");
	$statement->execute();
}
?>
