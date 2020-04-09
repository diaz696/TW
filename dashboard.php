<?php session_start();

if(isset($_SESSION['Usuario'])){
  require 'views/dashboard.view.php';
}else{
    header('Location: inicioSesion.php');
}

?>