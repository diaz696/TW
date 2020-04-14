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

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$resAlumnos=$conexion->query("SELECT * FROM producto");


///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
	while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
	{
            echo'
            <button  class="btn btn-outline-success">'.$filaAlumnos['Nombre'].'</button>
            ';
	}

?>
