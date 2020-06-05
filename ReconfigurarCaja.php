<?php

error_reporting(0);
header('Content-type: application/json; charset=utf-8');
$var = $_POST['Cantidad'];
$var2 = $_POST['Movimiento'];
$var3 = $_POST['Cargo'];


$conexion = new mysqli('localhost', 'root', '', 'tastywings');

if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("INSERT INTO caja(Cantidad_Total, Descripcion_movimiento, EmpleadoID) VALUES ('$var','$var2','$var3')");
	$statement->execute();
}
?>
