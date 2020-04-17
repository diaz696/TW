<?php

error_reporting(0);
header('Content-type: application/json; charset=utf-8');

$conexion = new mysqli('localhost', 'root', '', 'tastywings');

if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("SELECT Cantidad_Total FROM caja ORDER BY Fecha_Actualizada DESC LIMIT 1");
	$statement->execute();
	$resultados = $statement->get_result();
	
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			'id' 		=> $fila['Cantidad_Total']
		];
		array_push($respuesta, $usuario);
	}
}

echo json_encode($respuesta);
?>
