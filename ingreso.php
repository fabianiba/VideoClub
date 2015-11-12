
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bievenidos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <a href="../index.html"><img alt="Brand" src="images/logo.png"></a>
       </div>
       <div class="col-md-2">
            <?php session_start();
              if(isset($_SESSION["usuario"])){ ?>
                 <h3>Hola <?php  echo  $_SESSION["usuario"];  ?></h3>
              <?php }else{
                    header('location: log.php');
                    }
            ?>

       </div>
        <div class="col-md-2 boton">
          <?php echo '<a class="btn btn-danger" href="logout.php">Cerrar Sesion</a>';?>
        </div>
    </div>
  </div>
</nav>
  <div class="container movie">
    <h1>Bienvenidos</h1>
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Busqueda Avanzada</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav navbar-right">
          <form action="odd.php" method="post" class="navbar-form navbar-left" role="search">
              <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="Titulo">
              <input type="text" name="year" class="form-control" placeholder="Año">
              </div>
            <button type="submit" id="buscar" class="btn btn-default">Buscar</button>
          </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="row">
 <div class="col-md-3">
  <img src="http://ia.media-imdb.com/images/M/MV5BMTY2MTk3MDQ1N15BMl5BanBnXkFtZTcwMzI4NzA2NQ@@._V1_SX300.jpg" class="img-responsive" title="Harry Potter 2010">
 </div>
 <div class="col-md-3">
  <img src="http://ia.media-imdb.com/images/M/MV5BMTM4Mjg5ODEzMV5BMl5BanBnXkFtZTcwMDc3NDk0NA@@._V1_SX300.jpg" class="img-responsive" title="Mad Max 2010">
 </div>
 <div class="col-md-3">
  <img src="http://ia.media-imdb.com/images/M/MV5BMjExNzM0NDM0N15BMl5BanBnXkFtZTcwMzkxOTUwNw@@._V1_SX300.jpg" class="img-responsive" title="Titanic 2010">
 </div>
 <div class="col-md-3">
  <img src="http://ia.media-imdb.com/images/M/MV5BMTQ1MjQwMTE5OF5BMl5BanBnXkFtZTgwNjk3MTcyMDE@._V1_SX300.jpg" class="img-responsive" title="Frozen 2010">
 </div>
</div>

<div class="row">
 <div class="col-md-3">
  <img src="http://ia.media-imdb.com/images/M/MV5BMTczNTI2ODUwOF5BMl5BanBnXkFtZTcwMTU0NTIzMw@@._V1_SX300.jpg" class="img-responsive" title="Iron Man 2010">
 </div>
 <div class="col-md-3">
  <img src="http://ia.media-imdb.com/images/M/MV5BMTQ2NzUxMTAxN15BMl5BanBnXkFtZTcwMzEyMTIwMg@@._V1_SX300.jpg" class="img-responsive" title="Crepusculo 2010">
 </div>
 <div class="col-md-3">
  <img src="http://ia.media-imdb.com/images/M/MV5BMjY1NjcxODQ4MV5BMl5BanBnXkFtZTcwMzUxNjM4Mg@@._V1_SX300.jpg" class="img-responsive" title="Actividad Paranormal 2010">
 </div>
 <div class="col-md-3">
  <img src="http://ia.media-imdb.com/images/M/MV5BMjA5NTYzMDMyM15BMl5BanBnXkFtZTgwNjU3NDU2MTE@._V1_SX300.jpg" class="img-responsive" title="Volver al Futuro 2010">
 </div>
</div>














  </div>
  <div class="footer">
  <div class="container movie">
  <p>¿Tienes preguntas? Llama al 0-800-800-1300</p>
    <p class="text-muted credit">By Informatorio 2015 </p>
</div>
</div>


 <!--Aca se realiza una consulta de la sesion y se pregunta si existe la variable usuario, si existe
 muestro su nnombre de usuario, caso contrario redirecciono al login
 <?php session_start();
    if(isset($_SESSION["usuario"])){
      echo $_SESSION["usuario"];
     }else{
      header('location: log.php');
    }

    ?>
    <button><?php echo '<a href="logout.php">Logout</a>';?>logout</button>
    fin del la verificacion, bienvenida de usuario-->







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

