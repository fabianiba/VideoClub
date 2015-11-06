<?php
require('include.php');
require("conex.php");


session_start();

              if(isset($_SESSION["usuario"])){

                $smarty->assign('user', $_SESSION["usuario"]);
               }else{
                    header("location:index.php");

                    }


$smarty->assign('logout', '<a class="btn btn-danger" href="logout.php">Cerrar Sesion</a>');
$smarty->display('hola2.tpl');

?>

