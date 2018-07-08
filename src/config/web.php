<?php
/**
 * HiSite Yii2 base project.
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

use yii\di\Reference;

return array_filter([
    \yii\web\Application::class => Reference::to('application'),
    'application' => [
        'bootstrap' => array_filter([
            'debug' => $params['debug.enabled'] ?? null,
        ]),
        'modules' => array_filter([
            'debug' => empty($params['debug.enabled']) ? null : array_filter([
                'class' => \yii\debug\Module::class,
                'allowedIPs' => $params['debug.allowedIps'],
                'historySize' => $params['debug.historySize'],
            ]),
        ]),
    ],

    /// components
    'request' => [
        'enableCsrfCookie' => true, /// XXX TO BE DISABLED
        'cookieValidationKey' => $params['cookieValidationKey'],
    ],
    'user' => [
        'identityClass' => \hisite\models\User::class,
        'enableAutoLogin' => true,
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'enableStrictParsing' => false,
    ],
    'themeManager' => [
        'pathMap' => [
            '$themedViewPaths' => ['@hisite/views'],
        ],
    ],

    /// menus
    \hiqdev\thememanager\menus\AbstractMainMenu::class => [
        'class' => \hisite\menus\MainMenu::class,
    ],
    \hiqdev\thememanager\menus\AbstractFooterMenu::class => [
        'class' => \hisite\menus\FooterMenu::class,
    ],
]);
