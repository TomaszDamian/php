<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php 
	$dogAge = 5;
	$DogAgeInDogYears = $dogAge*7;
	?>
	<style>
		.bold{
			font-weight: bold;
		}
	</style>
</head>
	<body>
	<p>
		<!--
		there is prob a way better way to do this but I'm missing it lol
		-->
		<?php echo "The dog is "; ?>
		<span class="bold">
			<?php echo "{$DogAgeInDogYears}"; ?>
		</span>
		<?php echo " in dog years"; ?>
	</p>
	</body>
</html>