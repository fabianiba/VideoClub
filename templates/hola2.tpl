<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bievenidos</title>
    <link href="templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="templates/css/style3.css" rel="stylesheet">
  </head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <a href="../index.html"><img alt="Brand" src="images/logo.png"></a>
      </div>
      <div class="col-md-2">
        <a class="btn btn-danger" href="logout.php">Cerrar Sesion</a>
      </div>
    </div>
  </div>
</nav>
  <div class="container movie">
    <div class="row">
    <div class="col-md-10">
    <h1>Bienvenidos</h1>
    </div>
    <div class="col-md-2">
    <br><h4>Bienvenido: {$user}</h4></br>
    </div>
    </div>
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
          <form action="od2.php" method="post" class="navbar-form navbar-left" role="search">
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
  <img src="images/pelis/harry.jpg" class="img-responsive" title="Harry Potter 2010">
 </div>
 <div class="col-md-3">
  <img src="images/pelis/madmax.jpg" class="img-responsive" title="Mad Max 2010">
 </div>
 <div class="col-md-3">
  <img src="images/pelis/titanic.jpg" class="img-responsive" title="Titanic 2010">
 </div>
 <div class="col-md-3">
  <img src="images/pelis/frozen.jpg" class="img-responsive" title="Frozen 2010">
 </div>
</div>

<div class="row">
 <div class="col-md-3">
  <img src="images/pelis/ironman.jpg" class="img-responsive" title="Iron Man 2010">
 </div>
 <div class="col-md-3">
  <img src="images/pelis/crepusculo.jpg" class="img-responsive" title="Crepusculo 2010">
 </div>
 <div class="col-md-3">
  <img src="images/pelis/activity.jpg" class="img-responsive" title="Actividad Paranormal 2010">
 </div>
 <div class="col-md-3">
  <img src="images/pelis/backfuture.jpg" class="img-responsive" title="Volver al Futuro 2010">
 </div>
</div>

  </div>
  <div class="footer">
  <div class="container movie">
  <p>¿Tienes preguntas? Llama al 0-800-800-1300</p>
    <p class="text-muted credit">By Informatorio 2015 </p>
</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="templates/js/bootstrap.min.js"></script>
  </body>
</html>