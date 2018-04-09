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
			flex-direction: row;
			justify-content: center;
			align-items: center;
		}
		.Margin{
			margin: 0px 10px;
		}
	</style>
</head>
<body>
	<?php foreach ($countryAndTown as $country => $towns):?>
		<div class="Margin">
			<h4><?="$country " . '(' . sizeof($towns) . ')'?></h4>
			<?php foreach($towns as $town): ?>
				<li>
					<?="$town"?>
				</li>
			<?php endforeach; ?>
		</div>
	<?php endforeach; ?>
</body>
</html>