<?php



$connect=mysql_connect('localhost','root','hola') or die("ERROR AL CONECTAR CON LA BASE DE DATOS".mysql_error());
mysql_select_db("videonet",$connect) or die("ERROR AL CONECTAR CON LA BASE DE DATOS".mysql_error() )



?>