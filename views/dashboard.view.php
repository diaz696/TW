<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TastyWings</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css"> 
</head>
<body>
    
<!--Barra de navegación-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
   ¡Bienvenido! <span class="navbar-toggler-icon"></span>
  </button>
        
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">
          T a s t y  W i n g s
  </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Realizar venta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="RegistroVenta.php">Registro de ventas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="EstadoCaja.php">Estado de caja</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Estadistica.php">Estadística</a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">   
        <a class="nav-link" href="cerrar.php">Cerrar sesión</a>   
    </form>  
  </div>
</nav>
<!--Aquí termina la barra de navegación-->

<div class="jumbotron jumbotron-fluid text-center jtron">
  <div class="container jtron">
    <h1 class="font-weight-light">Menú</h1>
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    <input type="submit" value="10 Boneless" name="btnBoneless" />
    
  </div>
</div>


<div class="jumbotron jumbotron-fluid text-center jtron">
  <div class="container jtron">
      <h1 class="font-weight-light">Estado de la venta</h1>
      <div class="row">
          <div class="col-md-6">
            <h1 class="font-weight-light">Confirma la venta</h1>
            <input type="submit" value="Realizar compra" name="btnBoneless" />
            <input type="submit" value="Cancelar compra" name="btnBoneless" />  
          </div> 
          <div class="col-md-6">
            <h1 class="font-weight-light">Elementos de venta</h1>
            <table class="table table-responsive text-center">
                  <thead class="thead-light">
    <tr>
      <th></th>
      <th>Elemento</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>10 boneless</td>
      <td>$50</td>
    </tr>
  </tbody>
            </div> 
      </div> 
  </div>
</div>

    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>