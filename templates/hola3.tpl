
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bievenidos</title>

    <!-- Bootstrap -->
    <link href="templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="templates/css/style3.css" rel="stylesheet">


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

       </div>
        <div class="col-md-2 boton">
         <a class="btn btn-danger" href="logout.php">Cerrar Sesion</a>
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
  <div class="col-xs-4 col-md-2">
    <img class='img-responsive' src="images/pelis/nofound.jpg"><br>
  </div>
  <div class="col-xs-4 col-md-8">
  {if $aux eq '1'}
     <h1>{$title}</h1>
       <p>
       <strong>Anio; {$year}   </strong></br>
       <strong>Genero; {$genre}   </strong></br>
       <strong>Duracion; {$runtime}   </strong></br>
       </p><p>
       <strong>Director; {$director}   </strong></br>
       <strong>Writer; {$Writer}   </strong></br>
       <strong>Actors; {$Actors}   </strong></br>
             </div>
        <div class="col-md-2 col-xs-12">
           <h3 class='text-center'> Ranking </h3></br>
            <h1 class='text-center'>{$rating}</h1>

        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
        <h4> {$description}</h4><br>
        <strong> {$idioma}</strong><br>
        <strong>{$pais}</strong><br>
        <strong>{$fechlan}</strong><br>
        </div>
    </div>

{else}
{$error}
<div class='alert alert-danger' role='alert'> No se ah encontrado ninguna pelicula con esos datos</div>;
{/if}



</br></br></br>
<div class="row">
<p class="text-center">¿Tienes preguntas? Llama al 0-800-800-1300</p>
    <p class="text-muted credit text-center">By Informatorio 2015 </p>
</div>
