<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php 
	$BirthYear = 2000;
	$SomeFutureYear = 2077;
	$AgeInFuture = $SomeFutureYear - $BirthYear;
	$otherAgeFuture = $AgeInFuture - 1;
	?>
</head>
	<body>
		<h1>
			<?php 
			echo "you will be either {$AgeInFuture} or {$otherAgeFuture} years old in {$SomeFutureYear}";
			?>
		</h1>
	</body>
</html>