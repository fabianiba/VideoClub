
<?php

require('include.php');

 $title=$_POST['title'];
 $year=$_POST['year'];



$title = urlencode($title);

$json=file_get_contents("http://www.omdbapi.com/?t=$title&y=$year");

$details=json_decode($json);

if($details->Response=='True')
{
$smarty->assign('aux', 1);
    $smarty->assign('title', $details->Title);
    $smarty->assign('year', $details->Year);
    $smarty->assign('genre', $details->Genre);
    $smarty->assign('runtime', $details->Runtime);
    $smarty->assign('director', $details->Director);
    $smarty->assign('Writer', $details->Writer);
    $smarty->assign('Actors', $details->Actors);
    $smarty->assign('rating', $details->imdbRating);
    $smarty->assign('description', $details->Plot);
    $smarty->assign('idioma', $details->Language);
    $smarty->assign('pais', $details->Country);
    $smarty->assign('fechlan', $details->Released);
}
else{
    $smarty->assign('aux', 2);
    $smarty->assign('error', 'Pelicula no disponible');


}


$smarty->display('hola3.tpl');
?>

