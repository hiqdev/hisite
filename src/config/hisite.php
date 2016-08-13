<?php

/*
 * HiPanel core package
 *
 * @link      https://hipanel.com/
 * @package   hipanel-core
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2016, HiQDev (http://hiqdev.com/)
 */

$config = [
    'id' => 'hisite',
    'name' => 'HiSite',
    'basePath' => dirname(__DIR__),
    'viewPath' => '@hisite/views',
    'vendorPath' => '@root/vendor',
    'runtimePath' => '@root/runtime',
    'controllerNamespace' => 'hisite\controllers',
    'bootstrap' => ['log', 'themeManager', 'language', 'menuManager'],
    'aliases' => [
        '@bower'        => '@vendor/bower-asset',
        '@npm'          => '@vendor/npm-asset',
        '@vendor/bower' => '@vendor/bower-asset',
        '@vendor/npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            'enableCsrfCookie'    => true, /// XXX TO BE DISABLED
            'cookieValidationKey' => $params['cookieValidationKey'],
        ],
        'mailer' => [
            'class' => \yii\swiftmailer\Mailer::class,
            'viewPath' => '@hisite/mail',
        ],
        'log' => [
            'traceLevel' => defined('YII_DEBUG') && YII_DEBUG ? 3 : 0,
            'targets' => [
                'default' => [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class' => \yii\web\UrlManager::class,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
                '<_c:[\w\-]+>' => '<_c>/index',
                '<_c:[\w\-]+>/<_a:[\w\-]+>/<id:\d+>' => '<_c>/<_a>',
            ],
        ],
        'themeManager' => [
            'class' => \hiqdev\thememanager\ThemeManager::class,
        ],
        'menuManager' => [
            'class' => \hiqdev\menumanager\MenuManager::class,
            'items' => [
                'sidebar' => [
                    'items' => [],
                ],
                'breadcrumbs' => [
                    'saveToView' => 'breadcrumbs',
                ],
            ],
        ],
    ],
    'modules' => [
        'language' => [
            'class' => \hiqdev\yii2\language\Module::class,
            'languages' => [
                'en' => 'English',
                'ru' => 'Русский',
            ]
        ],
    ],
];

if (defined('YII_DEBUG') && YII_DEBUG) {
    $config['bootstrap']['debug'] = 'debug';
    $config['modules']['debug'] = [
        'class' => \yii\debug\Module::class,
        'allowedIPs' => $params['debug_allowed_ips'],
    ];
}

return $config;
