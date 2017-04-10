<?php

$_ENV['ENV'] = !empty($_ENV['ENV']) ? $_ENV['ENV'] : 'prod';
$_ENV['DEBUG'] = isset($_ENV['DEBUG']) ? $_ENV['DEBUG'] : $_ENV['ENV'] === 'dev';

defined('YII_DEBUG') or define('YII_DEBUG', $_ENV['DEBUG']);
defined('YII_ENV') or define('YII_ENV', $_ENV['ENV']);
