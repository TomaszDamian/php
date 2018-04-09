<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
			<li style="list-style: none">country: capital</li>
			<?php foreach ($ArrayOfCountries as $country => $capital):?>
				<li>
					<?= "$country: $capital"?>
				</li>
			<?php endforeach;?>
		</div>
	</body>
</html>