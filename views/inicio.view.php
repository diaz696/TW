
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sign in</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/InicioSesion.css">
    
        <script src="https://kit.fontawesome.com/8b850b0e85.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Inicio de Sesión</title>
        <link rel="stylesheet" href="css/estilosRegistro.css">
     </head>
    <body>
  
<div class="sidenav">
  <div class="login-main-text text-center">
    
          <img src="css/Usuarios.png" class="rounded text-center">
   
      <div class="row text-center">
        <h2 class = "display-3 font-italic text-center">&nbsp; &nbsp; &nbsp; Sign in</h2>
        <p class = "font-italic text-center">¿Has olvidado tu contraseña? ¡Contacta a tu administrador! </p>
      </div>      
  </div >
</div>
<div class="main">
  
  <div class="jumbotron">
    <h1 class = "display-3  font-italic text-center" >T A S T Y &nbsp; &nbsp; W I N G S  </h1>   
  </div> 

  <form class="jumbotron" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <h5 class = "display-4 font-italic " >Ingresa tu información </h1>
    <br>

    <div class="row">

      <div class="col-md-2"> 
      </div> 

      <div class="form-group col-md-8">
        <label class ="font-italic">Ingresa tu usuario</label>
        <input type="text" class="form-control inputa" placeholder="nickname" id="usuario" name="Usuario">
      </div>

    </div>   

    <div class="row">
      <div class="col-md-2"> 
      </div>     

      <div class="form-group col-md-8">
        <label class ="font-italic">Ingresa tu contraseña</label>
        <input type="password" class="form-control inputa" placeholder="Password" id="password" name="Password">
      </div>

    </div>
    <br>
    <button type="submit" id="boton" class="btn btn-outline-success" onclick="login.submit()" >Login</button>
    
    <?php if(!empty($errores)):?>
     <div class="error text-center">
          <?php
            echo $errores;
          ?>
      </div>
      <?php endif; ?>
  </form>
</div>
    </body>
</html>