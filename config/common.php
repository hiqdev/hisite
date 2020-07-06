<?php
/**
 * HiSite Yii2 base project.
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

$srcPath = dirname(__DIR__) . '/src';

return array_filter([
    'id' => $params['app.id'],
    'name' => $params['app.name'],
    'language' => $params['app.language'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@vendor/bower' => '@vendor/bower-asset',
        '@vendor/npm' => '@vendor/npm-asset',
    ],
    'basePath' => $srcPath,
    'viewPath' => $srcPath . '/views',
    'vendorPath' => '@root/vendor',
    'runtimePath' => '@root/runtime',
    'controllerNamespace' => 'hisite\controllers',
    'bootstrap' => array_filter([
        'log' => 'log',
    ]),
    'components' => [
        'mailer' => [
            'class' => \yii\swiftmailer\Mailer::class,
            'viewPath' => $srcPath . '/views/mail',
            'htmlLayout' => $srcPath . '/views/layouts/mail-html',
            'textLayout' => $srcPath . '/views/layouts/mail-text',
            'useFileTransport' => $params['mailer.enabled'] ? false : true,
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'i18n' => [
            'class' => \yii\i18n\I18N::class,
            'translations' => [
                'hisite' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => $srcPath . '/messages',
                ],
            ],
        ],
    ],
    'container' => [
        'singletons' => [
            \yii\base\Application::class => function () {
                return Yii::$app;
            },
            \yii\mail\MailerInterface::class => function () {
                return Yii::$app->get('mailer');
            },
        ],
    ],
    'params' => $params,
]);
