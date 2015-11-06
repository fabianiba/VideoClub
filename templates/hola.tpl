<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="templates/css/style2.css" rel="stylesheet">
  </head>
<body>
<div class="row">
  <div class="col-md-2">
  	<a href="index.php"><img alt="Brand" src="images/logo.png"></a>
  </div>
</div>
<div class="container"><p><br></br></p><p><br></br></p>
		<div class="row">
   			<div class="col-md-4 col-md-offset-4">
  				<div class="panel panel-default">
  				<div class="panel-heading">
    <h2 >Bienvenidos a Neckflix</h2>
  </div>
  <div class="panel-body">
     <form action="" method="post" class="login">
  <div class="form-group">
    <label>Nombre de Usuario</label>
    <input type="text" class="form-control" name="user" placeholder="Nombre de Usuario">
  </div>
  <div class="form-group">
    <label>Contraseña</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>

  <button name="login" value="login" type="submit" class="btn btn-default">Ingresar</button>
</form>
{if $error eq '1'}
	Welcome Sir.
{elseif $error eq '0'}
{else}
	{$error}
{/if}
¿Eres nuevo en Neckflix? <a href="crud/planes.html">Suscríbete ahora.</a>
  </div>
</div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="templates/js/bootstrap.min.js"></script>
  </body>
</html>