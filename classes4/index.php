<?php

require_once 'Movie.php';


function GetPG($movies)
{
    $PG = [];
    foreach ($movies as $movie){
        if($movie->getRating() == 'PG'){
            array_push($PG, $movie);
        }
    }
    return $PG;
}

$movies = [
    new Movie('Casino Royale', 'Eon Productions', 'PG13'),
    new Movie('Glass', 'Buena Vista International', 'PG13'),
    new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG')
];

$moviesRating = GetPG($movies);

foreach($moviesRating as $movie){
    echo $movie->getTitle() . ' from the studio ';
    echo $movie->getStudio() . ' with a rating of ';
    echo $movie->getRating() . PHP_EOL;
}