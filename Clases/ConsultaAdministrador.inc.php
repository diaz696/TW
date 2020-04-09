<?php

error_reporting(0);
header('Content-type: application/json; charset=utf-8');
include_once 'Conexion.inc.php';
$conexion = Conexion::Conectar();

if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("SELECT * FROM administrador");
	$statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			'id' 		=> $fila['nickname'],
			'nombre' 	=> $fila['password'],

		];
		array_push($respuesta, $usuario);
	}
}

echo json_encode($respuesta);
?>

