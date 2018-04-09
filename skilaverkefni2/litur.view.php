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
			justify-content: center;
			align-items: center;
		}
		.ColorBox{
			margin-left: 10px;
			padding: 0px 10px;
		}
	</style>
</head>
<body>
	<?php foreach ($colors as $color):?>
		<div class="ColorBox" style="background-color: <?=$color?>">
			<p style="color: white;">
				<?=$color?>
			</p>
			<p>
				<?=$color?>	
			</p>
		</div>
	<?php endforeach; ?>
</body>
</html>