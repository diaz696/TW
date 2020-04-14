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
$resAlumnos=$conexion->query("SELECT * FROM ventas");


///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
echo '<table class="table table-responsive text-center">
            <thead class="thead-light">
              <tr>
              <th>VentaID</th>
              <th>Cantidad</th>
              <th>Fecha</th>
              </tr>';

				while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
					echo'<tr>
						 <td>'.$filaAlumnos['VentaID'].'</td>
						 <td>'.$filaAlumnos['Cantidad'].'</td>
						 <td>'.$filaAlumnos['FechaVenta'].'</td>
                                                 <td><button class="btn btn-danger">Cancelar</button></td>
						 </tr>';
				}
				echo '</table>';
?>
