<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php 
	$AmountOfChildren = 0;
	$Married = "Tomasz";
	$Place = "Reykjavik";
	$job = "Computer Engineer";
	?>
	<style>
		html, body{
			height: 100%;
		}
		body{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
	<body>
		<div>
			<ul>
				<li><?php echo "Children: {$AmountOfChildren}"; ?></li>
				<li><?php echo "Married to: {$Married}"; ?></li>
				<li><?php echo "Town: {$Place}"; ?></li>
				<li><?php echo "Job: {$job}"; ?></li>
			</ul>
		</div>
		<div>	
			<h1><?php
			 echo "your job will be {$job}, in the town {$Place} and you will marry {$Married} and have {$AmountOfChildren} children"; 
			?></h1>
		</div>
	</body>
</html>