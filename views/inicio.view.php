
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    </head>
    <body>
        
        <!--Barra de navegación-->
        <nav class="navbar-default  navbar-static-top">   
            <div class="container">
                <div class="navbar-header text-center">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-expanded="true" aria-controls="navbar">    
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <br>
                    <a class="navbar-brand" href="#">¡Bienvenido!</a> 
                </div> 
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="form-inline" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <br>
                        <input id="nick" class="form-control mr-sm-4" type="text" placeholder="Nickname" name="Usuario">
                        <input id="pass" class="form-control mr-sm-4" type="password" placeholder="Password" name="Password">
                        <button onclick="login.submit()" class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            <span class="glyphicon glyphicon-log-in"></span>
                            Sign in
                        </button>
                        <?php if(!empty($errores)):?>
                            <div class="error">
                              <ul>
                                 <?php
                                    echo $errores;
                                ?>
                             </ul>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>      
        </nav>
        <br>
       
        <!--JumboTron-->
        <div class="container text-center">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <br>
                        <br>
                        <h1>TastyWings</h1>
                        <p>Boneless, alitas y más...</p>
                    </div>
                    <div class="col-md-6-6">
                        <img src="https://scontent.fntr6-1.fna.fbcdn.net/v/t1.0-9/59549783_610885669423238_5947629230706655232_n.jpg?_nc_cat=108&_nc_sid=dd9801&_nc_ohc=Fgu8uitKNekAX88mk1T&_nc_ht=scontent.fntr6-1.fna&oh=d5154304bd62f63ad54f415e9c683e90&oe=5EA8F578" class="img-circle img-responsive">
                    </div>
                </div>
            </div>
        </div>
        
        <script src="Botones.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>