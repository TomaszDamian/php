<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		html, body{
			height: 100%;
		}
		body{
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
	<body>
		<div>
			<p class="is-size-7">
				Verk I:
			</p>
			<h1 class="title"><?="$HowManydaysInMonth days in $Month"?></h1>
			<p class="is-size-7">
				Verk II og III:
			</p>
			<h1 class="title">
				<?="There are {$HowManydaysInMonths} days in "?>
				<?php foreach($Months as $month): ?>
					<span><?=$month?></span>
				<?php endforeach;?>	
				in total
			</h1>
		</div>
	</body>
</html>