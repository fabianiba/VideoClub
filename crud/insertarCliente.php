<?php

  require("conex.php");

  $nom = $_POST["firstName"];
  $ape = $_POST["lastName"];
  $dni = $_POST["dni"];
  $us = $_POST["username"];
  $em = $_POST["email"];
  $pas = $_POST["password"];
  $nc = $_POST["numCard"];
  $contrato = $_POST["contrato"];

  $query="INSERT INTO usuarios ( nombre,apellido,dni,email,contrato,nroTarjeta,usuario,password)
       VALUES ('$nom','$ape','$dni','$em','$contrato','$nc','$us','$pas')";

  if(mysql_query($query))
{
  header('Location: ../index2.php');
}
else
{
  echo "error en la query";
}



?>