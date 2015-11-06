<?php /* Smarty version 3.1.27, created on 2015-10-28 04:52:04
         compiled from "C:\xampp\htdocs\smar\templates\hola.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1392256304664dec705_39609182%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e05e452764fb34473bc2848a1dc77dc3c7e6ee71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smar\\templates\\hola.tpl',
      1 => 1446004136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1392256304664dec705_39609182',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56304664e88b27_37781398',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56304664e88b27_37781398')) {
function content_56304664e88b27_37781398 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1392256304664dec705_39609182';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style2.css" rel="stylesheet">
  </head>
<body>
	<div class="row">
    	<div class="col-md-2">
    		<a href="index.html"><img alt="Brand" src="images/logo.png"></a>
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

¿Eres nuevo en Neckflix? <a href="crud/planes.html">Suscríbete ahora.</a>
  </div>
</div>
</div>
</div>













    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
?>