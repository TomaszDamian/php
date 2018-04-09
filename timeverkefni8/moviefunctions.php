<?php
function ReturnDataProcessed($movieArray){
	$string = "the movie " . $movieArray['title'] . " is " . $movieArray['length'] . " minutes long, features: ";
	foreach ($movieArray['actors'] as $actors => $actor) {
		$string = $string . $actor . ", ";
	}
	return $string;
}