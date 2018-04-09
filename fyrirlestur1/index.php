<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP and HTML</title>
	<style>
		header{
			background-color: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>
			<?php 
				$greeting = "hello there, ";
				echo $greeting . $_GET["name"];
			?>
		</h1>
	</header>	
</body>
</html>
