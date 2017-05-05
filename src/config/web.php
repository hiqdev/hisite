<?php
/**
 * HiSite Yii2 base project
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return array_filter([
    'bootstrap' => array_filter([
        'debug' => empty($params['debug.enabled']) ? null : 'debug',
    ]),
    'components' => [
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
            'class' => \yii\web\UrlManager::class,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
        ],
        'themeManager' => [
            'pathMap' => [
                '$themedViewPaths' => ['@hisite/views'],
            ],
        ],
    ],
    'modules' => array_filter([
        'debug' => empty($params['debug.enabled']) ? null : array_filter([
            'class' => \yii\debug\Module::class,
            'allowedIPs' => $params['debug.allowedIps'],
            'historySize' => $params['debug.historySize'],
        ]),
    ]),
    'container' => [
        'singletons' => [
            \hiqdev\thememanager\menus\AbstractMainMenu::class => [
                'class' => \hisite\menus\MainMenu::class,
            ],
            \hiqdev\thememanager\menus\AbstractFooterMenu::class => [
                'class' => \hisite\menus\FooterMenu::class,
            ],
        ],
    ],
]);
