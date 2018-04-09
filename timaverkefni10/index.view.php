<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.ReadComplete{
			color: red;
		}
	</style>
</head>
	<body>
		<?php foreach ($Chapters as $Chapter):?>
			<?php if($Chapter->read):?>
				<div class="ReadComplete">
					<h1>
						<?=$Chapter->title?>
					</h1>
					<p>
						<?=$Chapter->body?>
					</p>
				</div>
			<?php else:?>
				<div>
					<h1>
						<?=$Chapter->title?>
					</h1>
					<p>
						<?=$Chapter->body?>
					</p>
				</div>
			<?php endif; ?>
		<?php endforeach;?>
	</body>
</html>