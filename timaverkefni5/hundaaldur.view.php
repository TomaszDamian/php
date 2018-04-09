<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
		<?= "The dog is "; ?>
		<span class="bold">
			<?= "{$DogAgeInDogYears}"; ?>
		</span>
		<?= " in dog years"; ?>
	</p>
	</body>
</html>