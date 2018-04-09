<?php
$app = [];
$app['config'] = require 'config.php';

require 'core/router.php';
require 'core/request.php';
require 'core/helper.php';
require 'core/database/queryBuilder.php';
require 'core/database/Connection.php';

$app['database'] = new QueryBuilder(
	Connection::Make($app['config']['database'])
);