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
	$statement = $conexion->prepare("SELECT * FROM ventas WHERE Date(FechaVenta) = CURRENT_DATE()");
	$statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			'Cantidad' 		=> $fila['Cantidad']
		];
		array_push($respuesta, $usuario);
	}
}

echo json_encode($respuesta);
?>
