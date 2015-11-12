<?php
  
  require("conexionObjeto.php");

  $stmt = $connectionDB->prepare('SELECT * FROM usuarios WHERE idusuario = 10 ');
  //$stmt->bind_param('s',$nom);
  $stmt->execute();
  $result = $stmt->get_result();
  $arreglo=array();
  $i=0;
  while($row = $result->fetch_assoc()){
    $arreglo[$i] = $row;
    $i++;
  }
  
  $response = json_encode($arreglo);
  echo $response;
     


?>