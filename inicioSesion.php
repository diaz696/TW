<?php session_start();

// if(isset($_SESSION['usuario'])){
//     header('location: index.php');  //Es por si el usuario inicia sesion e intenta entrar al formulario de registro no pueda acceder a ellos
// }


if($_SERVER['REQUEST_METHOD']=='POST'){
   $usuario = filter_var(strtolower($_POST['Usuario']),FILTER_SANITIZE_STRING);
   $password = $_POST['Password'];
   $errores='';   
   try {
    $conexion= new PDO('mysql:host=127.0.0.1;dbname=tastywings','root','');
   } catch (PDOException $e) {
       echo "Error:".$e->getMessage();
   }

$statement2 = $conexion->prepare
('SELECT * FROM administrador WHERE nickname = :nombre AND password = :pass');

$statement2->execute(array(
 ':nombre' => $usuario,
 ':pass' => $password
));


   $resultado2 = $statement2->fetch();
   if($resultado2!==false){
    // echo 'adm';
    $_SESSION['Usuario'] = $usuario;
    header('Location: dashboard.php');
}else{
    $errores .= '<li style="color: white;">Datos incorrectos</li>';
}
}
    




require 'views/inicio.view.php';
?>