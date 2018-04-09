<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<body>
		<h3>About me:</h3>
		<?php foreach ($Me as $key => $value):?>
			<li>
				<?= ucfirst($key) . ": " . ucfirst($value) ?>
			</li>
		<?php endforeach;?>
	</body>
</html>