<?php
/**
 * HiSite Yii2 base project.
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'app.id'                => 'hisite',
    'app.name'              => 'HiSite',
    'app.language'          => null,

    'favicon.ico'           => '@hisite/assets/images/favicon.ico',

    'debug.enabled'         => !(defined('YII_ENV') && YII_ENV === 'prod'),
    'debug.allowedIps'      => explode(',', $_ENV['DEBUG_ALLOWED_IPS'] ?? '127.0.0.1'),
    'debug.historySize'     => 100,

    'mailer.enabled'        => (defined('YII_ENV') && YII_ENV === 'prod') ? true : null,

    'cookieValidationKey'   => null,

    'poweredBy.name'        => 'Yii2 & HiSite',
    'poweredBy.url'         => 'https://github.com/hiqdev/hisite',

    'my.ip'                 => null,
];
