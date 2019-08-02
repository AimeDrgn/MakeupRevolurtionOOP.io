<?php

require_once './bootstrap.php';

$config = require ROOT_PATH. "config/config.php";

$app = \Core\Application::getInstance($config);
$app->run();
