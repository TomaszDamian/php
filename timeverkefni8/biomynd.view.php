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
		.noDot{
			list-style: none;
		}
		.Below5{
			color: red;
		}
		.Above5{
			color: blue;
		}
	</style>
</head>
	<body>
		<div>
			<ul>
				<?php if($Movies["rating"] >= 5):?>
					<li class="Above5"><?=$Movies["title"]?></li>
				<?php else: ?>
					<li class="Below5"><?=$Movies["title"]?></li>
				<?php endif; ?>
				<li><?=$Movies["length"]?></li>
				<li><?=$Movies["rating"]?></li>
				<li class="noDot">Actors:</li>
				<?php foreach ($Movies["actors"] as $actor):?>
					<li><?=$actor?></li>
				<?php endforeach; ?>

			</ul>
		</div>
	</body>
</html>