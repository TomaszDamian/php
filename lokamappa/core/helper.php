<?php
function redirect($path){
	header("Location: {$path}");
}

function view($viewLocation, $data = []){
	extract($data);
	require "views/$viewLocation.view.php";
}