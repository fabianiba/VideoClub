<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ingresar</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="row">

    <div class="col-md-2">
       <a href="index.html"><img alt="Brand" src="images/logo.png"></a>
    </div>
    </div>


<div class="container">
<p><br></br></p><p><br></br></p>
<div class="row">

  <div class="alert alert-warning alert-dismissible col-md-4 col-md-offset-4" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Los datos Fueron registrado correctamente.</strong>
  </div>

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
<?php
session_start(); //session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie
require("conex.php"); //es la sentencia q usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
/*Función verificar_login() --> Vamos a crear una función llamada verificar_login, esta se encargara de hacer una consulta a la base de datos para saber si el usuario ingresado es correcto o no.*/

function verificar_login($user,$password,&$result)
    {
        $sql = "SELECT * FROM usuario WHERE user = '$user' and password = '$password'";

        $rec = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_object($rec))
        {
            $count++;
            $result = $row;
        }
        if($count == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

/*Luego haremos una serie de condicionales que identificaran el momento en el boton de login es presionado y cuando este sea presionado llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/

if(!isset($_SESSION['usuario'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
{
    if(isset($_POST['login'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
    {
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
        {
            /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
            $_SESSION['usuario'] = $result->usuario;
            header("location:ingreso.php");
        }
        else
        {

            echo '<br><div class="alert alert-danger" role="alert">Su usuario es incorrecto, intente nuevamente.</div>'; //Si la función verificar_login() no pasa, que se muestre un mensaje de error.
        }
    }
?>





<?php
} else {
    // Si la variable de sesión ‘userid’ ya existe, que muestre el mensaje de saludo.
    echo 'Su usuario ingreso correctamente.';
    echo '<a href="logout.php">Logout</a>';
}
?>



¿Eres nuevo en Neckflix? <a href="crud/planes.html">Suscríbete ahora.</a>
  </div>
</div>
</div>
</div>













    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>