<?php
session_start();

              if(isset($_SESSION["usuario"])){
                  header('location: ingreso.php');}



//session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie
require("conex.php");

//cargamos las librerías de smarty
require('include.php');
//session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie
 //es la sentencia q usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
/*Función verificar_login() --> Vamos a crear una función llamada verificar_login, esta se encargara de hacer una consulta a la base de datos para saber si el usuario ingresado es correcto o no.*/

function verificar_login($user,$password,&$result)
    {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'";

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
$smarty->assign('error', '0');
if(!isset($_SESSION['usuario'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
{
    if(isset($_POST['login'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado

    {

        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
        {
            /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
            $_SESSION['usuario'] = $result->usuario;
            header("location:ingreso.php");
            $smarty->assign('error', '1');

        }
        else
        {
        	$smarty->assign('error', '<br><div class="alert alert-danger" role="alert">Su usuario es incorrecto, intente nuevamente.</div>');
            //Si la función verificar_login() no pasa, que se muestre un mensaje de error.
        }
    }
} else {
    // Si la variable de sesión ‘userid’ ya existe, que muestre el mensaje de saludo.
    echo 'Su usuario ingreso correctamente.';
    echo '<a href="logout.php">Logout</a>';
}



$smarty->display('hola.tpl');

?>