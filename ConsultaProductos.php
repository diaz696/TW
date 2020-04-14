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
echo '<table class="table table-responsive text-center">
            <thead class="thead-light">
              <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Precio</th>
              </tr>';

				while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
					echo'<tr>
						 <td>'.$filaAlumnos['ProductoID'].'</td>
						 <td>'.$filaAlumnos['Nombre'].'</td>
						 <td>'.$filaAlumnos['Precio'].'</td>
                                                 <td><button class="btn btn-danger">Eliminar</button></td>
                                                 <td><button type="button" class="btn btn-warning">Modificar</button></td>
						 </tr>';
				}
				echo '</table>';
?>
