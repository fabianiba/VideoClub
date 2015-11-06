<?php /* Smarty version 3.1.27, created on 2015-11-06 00:00:31
         compiled from "templates\hola3.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8179563bdf8feb0b50_06420035%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adae289ed1bbcf54a59bad97105b00553ecacd40' => 
    array (
      0 => 'templates\\hola3.tpl',
      1 => 1446764427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8179563bdf8feb0b50_06420035',
  'variables' => 
  array (
    'aux' => 0,
    'title' => 0,
    'year' => 0,
    'genre' => 0,
    'runtime' => 0,
    'director' => 0,
    'Writer' => 0,
    'Actors' => 0,
    'rating' => 0,
    'description' => 0,
    'idioma' => 0,
    'pais' => 0,
    'fechlan' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563bdf9005cc14_76712177',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563bdf9005cc14_76712177')) {
function content_563bdf9005cc14_76712177 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8179563bdf8feb0b50_06420035';
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bievenidos</title>

    <!-- Bootstrap -->
    <link href="templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="templates/css/style3.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

  </head>
  <body>
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <a href="../index.html"><img alt="Brand" src="images/logo.png"></a>
       </div>
       <div class="col-md-2">

       </div>
        <div class="col-md-2 boton">
         <a class="btn btn-danger" href="logout.php">Cerrar Sesion</a>
        </div>
    </div>
  </div>
</nav>
  <div class="container movie">
    <h1>Bienvenidos</h1>
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Busqueda Avanzada</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav navbar-right">
          <form action="od2.php" method="post" class="navbar-form navbar-left" role="search">
              <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="Titulo">
              <input type="text" name="year" class="form-control" placeholder="Año">
              </div>
            <button type="submit" id="buscar" class="btn btn-default">Buscar</button>
          </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <div class="row">
  <div class="col-xs-4 col-md-2">
    <img class='img-responsive' src="images/pelis/nofound.jpg"><br>
  </div>
  <div class="col-xs-4 col-md-8">
  <?php if ($_smarty_tpl->tpl_vars['aux']->value == '1') {?>
     <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
       <p>
       <strong>Anio; <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
   </strong></br>
       <strong>Genero; <?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
   </strong></br>
       <strong>Duracion; <?php echo $_smarty_tpl->tpl_vars['runtime']->value;?>
   </strong></br>
       </p><p>
       <strong>Director; <?php echo $_smarty_tpl->tpl_vars['director']->value;?>
   </strong></br>
       <strong>Writer; <?php echo $_smarty_tpl->tpl_vars['Writer']->value;?>
   </strong></br>
       <strong>Actors; <?php echo $_smarty_tpl->tpl_vars['Actors']->value;?>
   </strong></br>
             </div>
        <div class="col-md-2 col-xs-12">
           <h3 class='text-center'> Ranking </h3></br>
            <h1 class='text-center'><?php echo $_smarty_tpl->tpl_vars['rating']->value;?>
</h1>

        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
        <h4> <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</h4><br>
        <strong> <?php echo $_smarty_tpl->tpl_vars['idioma']->value;?>
</strong><br>
        <strong><?php echo $_smarty_tpl->tpl_vars['pais']->value;?>
</strong><br>
        <strong><?php echo $_smarty_tpl->tpl_vars['fechlan']->value;?>
</strong><br>
        </div>
    </div>

<?php } else { ?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<div class='alert alert-danger' role='alert'> No se ah encontrado ninguna pelicula con esos datos</div>;
<?php }?>



</br></br></br>
<div class="row">
<p class="text-center">¿Tienes preguntas? Llama al 0-800-800-1300</p>
    <p class="text-muted credit text-center">By Informatorio 2015 </p>
</div>
<?php }
}
?>