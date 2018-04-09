<?php
$name = $_POST['name'];
$app['database']->insert('users',[
	'name' => $_POST['name']
]);

redirect('/');