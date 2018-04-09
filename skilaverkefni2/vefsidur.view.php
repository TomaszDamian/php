<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($Websites as $website): ?>
		<a href="<?=$website[1]?>"><?=$website[0]?></a>
	<?php endforeach;?>
</body>
</html>