<?php
require 'moviefunctions.php';
$movie = [
"title" => "Bee movie",
"length" => 91,
"actors" => [
	'Jerry Seinfeld',
	'Renée Zellweger',
	'Matthew Broderick'
	]
];

$AboutMovie = ReturnDataProcessed($movie);

require 'movie.view.php';