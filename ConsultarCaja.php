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
	$statement = $conexion->prepare("SELECT * FROM caja ORDER BY Fecha_Actualizada DESC");
	$statement->execute();
	$resultados = $statement->get_result();
	
	$respuesta = [];
	
	while($fila = $resultados->fetch_assoc()){
		$usuario = [
			'id' 		=> $fila['ID'],
			'cantidad' 	=> $fila['Cantidad_Total'],
			'Descripcion'		=> $fila['Descripcion_movimiento'],
                        'EmpleadoID'		=> $fila['EmpleadoID'],
                        'Fecha'		=> $fila['Fecha_Actualizada'],
		];
		array_push($respuesta, $usuario);
	}
}

echo json_encode($respuesta);
?>