<?php

if (!defined('HISITE_VENDOR_DIR')) {
    define('HISITE_VENDOR_DIR', dirname(__DIR__, 4) . '/vendor');
}

if (!file_exists(HISITE_VENDOR_DIR . '/autoload.php')) {
    die("Run composer to set up dependencies!\n");
}

require_once HISITE_VENDOR_DIR . '/autoload.php';
require_once \hiqdev\composer\config\Builder::path('defines');
require_once HISITE_VENDOR_DIR . '/yiisoft/yii2/Yii.php';

Yii::setAlias('@root', dirname(HISITE_VENDOR_DIR));
Yii::setAlias('@vendor', HISITE_VENDOR_DIR);
