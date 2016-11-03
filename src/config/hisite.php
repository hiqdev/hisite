<?php

/*
 * HiSite core package
 *
 * @link      https://github.com/hiqdev/hisite-core
 * @package   hisite-core
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return array_filter([
    'id' => 'hisite',
    'name' => 'HiSite',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@vendor/bower' => '@vendor/bower-asset',
        '@vendor/npm' => '@vendor/npm-asset',
        '@hisite' => dirname(__DIR__),
    ],
    'basePath' => dirname(__DIR__),
    'viewPath' => '@hisite/views',
    'vendorPath' => '@root/vendor',
    'runtimePath' => '@root/runtime',
    'controllerNamespace' => 'hisite\controllers',
    'bootstrap' => array_filter([
        'log' => 'log',
        'debug' => defined('YII_DEBUG') && YII_DEBUG ? 'debug' : null,
    ]),
    'components' => [
        'request' => [
            'enableCsrfCookie' => true, /// XXX TO BE DISABLED
            'cookieValidationKey' => empty($params['cookieValidationKey']) ? null : $params['cookieValidationKey'],
        ],
        'mailer' => [
            'viewPath' => '@hisite/views/mail',
            'htmlLayout' => '@hisite/views/layouts/mail-html',
            'textLayout' => '@hisite/views/layouts/mail-text',
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'user' => [
            'identityClass' => \hisite\models\User::class,
            'enableAutoLogin' => true,
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
        'menuManager' => [
            'items' => [
                'main' => \hisite\menus\MainMenu::class,
                'footer' => \hisite\menus\FooterMenu::class,
            ],
        ],
        'themeManager' => [
            'pathMap' => [
                '$themedViewPaths' => ['@hisite/views'],
            ],
        ],
        'i18n' => [
            'translations' => [
                'hisite' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hisite/messages',
                    'fileMap' => [
                        'hisite' => 'hisite.php',
                    ],
                ],
            ],
        ],
    ],
    'modules' => array_filter([
        'debug' => defined('YII_DEBUG') && YII_DEBUG ? [
            'class' => \yii\debug\Module::class,
            'allowedIPs' => $params['debug.allowedIps'],
        ] : null,
    ]),
]);
