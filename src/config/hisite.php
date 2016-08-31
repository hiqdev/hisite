<?php

/*
 * Hisite core package
 *
 * @link      https://github.com/hiqdev/hisite-core
 * @package   hisite-core
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return [
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
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'enableCsrfCookie' => true, /// XXX TO BE DISABLED
            'cookieValidationKey' => $params['cookieValidationKey'],
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
            'menus' => [
                'main' => \hisite\MainMenu::class,
                'footer' => \hisite\FooterMenu::class,
            ],
        ],
        'themeManager' => [
            'viewPaths' => [
                'hisite' => '@hisite/views',
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
                'hisite/page' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hisite/messages',
                    'fileMap' => [
                        'page' => 'page.php',
                    ],
                ],
            ],
        ],
    ],
];
