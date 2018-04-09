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
			<ul>
				<li><?= "Children: $AmountOfChildren"?></li>
				<li><?= "spouse: " . $Married ?></li>
				<li><?= "job: " . $job?></li>
				<li><?= "Place: " . $Place?></li>
			</ul>
		</div>
		<div>	
			<h1><?= "your job will be $job, in the town $Place and you will marry $Married and have $AmountOfChildren children"?></h1>
		</div>
	</body>
</html>