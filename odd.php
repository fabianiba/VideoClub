<?php



 $title=$_POST['title'];
 $year=$_POST['year'];



$title = urlencode($title);

$json=file_get_contents("http://www.omdbapi.com/?t=$title&y=$year");

$details=json_decode($json);

if($details->Response=='True')

{

    //Print the movie information

    echo "IMDB-ID : ".$details->imdbID.'<br>';

    echo "Title : ".$details->Title.'<br>';

    echo "Year : ".$details->Year.'<br>';

    echo "Rated : ".$details->Rated.'<br>';

    echo "Poster Image Path: ".$details->Poster.'<br>';

    echo "<img src=\"$details->Poster\"><br>";

    echo "Released Date: ".$details->Released.'<br>';

    echo "Runtime : ".$details->Runtime.'<br>';

    echo "Genre : ".$details->Genre.'<br>';

    echo "Director : ".$details->Director.'<br>';

    echo "Writer : ".$details->Writer.'<br>';

    echo "Actors : ".$details->Actors.'<br>';

    echo "Plot : ".$details->Plot.'<br>';

    echo "Language : ".$details->Language.'<br>';

    echo "Country : ".$details->Country.'<br>';

    echo "Awards : ".$details->Awards.'<br>';

    echo "Metascore : ".$details->Metascore.'<br>';

    echo "IMDB Rating : ".$details->imdbRating.'<br>';

    echo "IMDB Votes : ".$details->imdbVotes.'<br>';

}



else

{

     echo "No se ah encontrado ninguna pelicula con esos datos";

}

?>
