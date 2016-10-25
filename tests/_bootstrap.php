<?php

/*
 * HiSite core package
 *
 * @link      https://github.com/hiqdev/hisite-core
 * @package   hisite-core
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

error_reporting(E_ALL & ~E_NOTICE);

$bootstrap = __DIR__ . '/../src/_bootstrap.php';

require_once file_exists($bootstrap) ? $bootstrap : __DIR__ . '/../vendor/autoload.php';
