<?php

error_reporting(0);
header('Content-type: application/json; charset=utf-8');
$var = $_POST['cantidad'];
$var2 = $_POST['descripcion'];
$var3 = $_POST['empleado'];
$var4 = $_POST['caja'];
$var5;
if($_POST['caso']==='1'){
    $var5= $var+$var4;
}else{
    $var5=$var4-$var;
}

$conexion = new mysqli('localhost', 'root', '', 'tastywings');

if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("INSERT INTO caja(Cantidad_Total, Descripcion_movimiento, EmpleadoID) VALUES ('$var5','$var2','$var3')");
	$statement->execute();
}
?>
