<?php
  
  require("conexionObjeto.php");
  
  $id = $_POST["idOculto"];
  $nombre = $_POST["firstName"];
  $apellido = $_POST["lastName"];
  $usuario = $_POST["username"];
  $dni = $_POST["dni"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $numCard = $_POST["numCard"];
  $contrato = $_POST["contrato"];

  $stmt = $connectionDB->prepare(' UPDATE usuarios SET usuario=?, password=?, nombre=?, apellido=?, dni=?, email=?, contrato=?, nroTarjeta=?  WHERE idusuario=?  ');
  $stmt->bind_param('ssssissii',$usuario,$password,$nombre,$apellido,$dni,$email,$contrato,$numCard,$id);

  $stmt->execute();



?>