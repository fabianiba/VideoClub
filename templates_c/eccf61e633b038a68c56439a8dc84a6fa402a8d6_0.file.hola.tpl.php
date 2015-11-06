<?php /* Smarty version 3.1.27, created on 2015-11-06 00:31:18
         compiled from "templates\hola.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11367563be6c6748ac0_63813151%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eccf61e633b038a68c56439a8dc84a6fa402a8d6' => 
    array (
      0 => 'templates\\hola.tpl',
      1 => 1446766237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11367563be6c6748ac0_63813151',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563be6c679ab56_36020614',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563be6c679ab56_36020614')) {
function content_563be6c679ab56_36020614 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11367563be6c6748ac0_63813151';
?>
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
<?php if ($_smarty_tpl->tpl_vars['error']->value == '1') {?>
	Welcome Sir.
<?php } elseif ($_smarty_tpl->tpl_vars['error']->value == '0') {?>
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?>
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
 src="templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
?>