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
	$statement = $conexion->prepare("SELECT * FROM producto where ProductoID='$var'");
	$statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			'id' 		=> $fila['ProductoID'],
			'nombre' 	=> $fila['Nombre'],
			'precio'		=> $fila['Precio'],
		];
		array_push($respuesta, $usuario);
	}
}

echo json_encode($respuesta);
?>
