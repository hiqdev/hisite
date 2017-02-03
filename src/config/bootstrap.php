<?php
/**
 * hipanel.ahnames.com
 *
 * @link      http://ahnames.com/
 * @package   hipanel.ahnames.com
 * @license   proprietary
 * @copyright Copyright (c) 2016-2017, AHnames (https://ahnames.com/)
 */

if (!defined('HISITE_ROOT_DIR')) {
    fwrite(STDERR, "HISITE_ROOT_DIR constant must be defined");
    exit(1);
}

if (!defined('HISITE_CONFIG_DIR')) {
    define('HISITE_CONFIG_DIR', HISITE_ROOT_DIR . '/src/config');
}

if (!defined('HISITE_VENDOR_DIR')) {
    foreach ([HISITE_ROOT_DIR . '/vendor'] as $dir) {
        if (file_exists($dir . '/autoload.php')) {
            define('HISITE_VENDOR_DIR', $dir);
            break;
        }
    }

    if (!defined('HISITE_VENDOR_DIR')) {
        fwrite(STDERR, "Run composer to set up dependencies!\n");
        exit(1);
    }

    if (file_exists(HISITE_CONFIG_DIR . '/defines-local.php')) {
        require_once HISITE_CONFIG_DIR . '/defines-local.php';
    }

    require_once HISITE_CONFIG_DIR . '/defines.php';
    require_once HISITE_VENDOR_DIR . '/autoload.php';
    require_once HISITE_VENDOR_DIR . '/yiisoft/yii2/Yii.php';

    Yii::trace('Started', __METHOD__);

    Yii::setAlias('@root', HISITE_ROOT_DIR);
    Yii::setAlias('@vendor', HISITE_VENDOR_DIR);
}
