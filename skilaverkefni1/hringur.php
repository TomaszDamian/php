<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php
	$circleRadius = 10; //cm
	$circumference = ($circleRadius*2)*M_PI;
	$area = pow($circleRadius,2)*M_PI;
	?>
</head>
	<body>
		<div>
			<h4><?php echo "circles circumference is {$circumference} cm"?></h4>
		</div>
		<div>
			<h4><?php echo "circles area is {$area} square centimeters"; ?></h4>
		</div>
	</body>
</html>