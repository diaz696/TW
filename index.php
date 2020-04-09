<?php session_start();
if(isset($_SESSION['Usuario'])){
  header('location: contenido.php');
} else{
    header('location: inicioSesion.php');
}

?>