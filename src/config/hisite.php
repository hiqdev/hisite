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
    'id' => 'hisite',
    'name' => 'HiSite',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@vendor/bower' => '@vendor/bower-asset',
        '@vendor/npm' => '@vendor/npm-asset',
    ],
    'basePath' => dirname(__DIR__),
    'viewPath' => '@hisite/views',
    'vendorPath' => '@root/vendor',
    'runtimePath' => '@root/runtime',
    'controllerNamespace' => 'hisite\controllers',
    'bootstrap' => array_filter([
        'language' => 'language',
        'log' => 'log',
        'debug' => empty($params['debug.enabled']) ? null : 'debug',
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
        'language' => [
            'languages' => [
                'ru' => 'Русский',
                'en' => 'English',
            ],
        ],
        'debug' => empty($params['debug.enabled']) ? null : array_filter([
            'class' => \yii\debug\Module::class,
            'allowedIPs' => isset($params['debug.allowedIps']) ? $params['debug.allowedIps'] : null,
            'historySize' => isset($params['debug.historySize']) ? $params['debug.historySize'] : null,
        ]),
    ]),
    'container' => [
        'singletons' => [
            \yii\base\Application::class => function () {
                return Yii::$app;
            },
            \yii\mail\MailerInterface::class => function () {
                return Yii::$app->get('mailer');
            },
        ],
        'definitions' => [
            \hiqdev\thememanager\menus\AbstractMainMenu::class => [
                'class' => \hisite\menus\MainMenu::class,
            ],
            \hiqdev\thememanager\menus\AbstractFooterMenu::class => [
                'class' => \hisite\menus\FooterMenu::class,
            ],
        ],
    ],
]);
