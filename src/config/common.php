<?php
/**
 * HiSite Yii2 base project.
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return array_filter([
    'application' => [
        'id' => $params['app.id'],
        'name' => $params['app.name'],
        'language' => $params['app.language'],
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
            'log' => 'log',
        ]),
    ],

    'mailer' => [
        '__class' => \yii\swiftmailer\Mailer::class,
        'viewPath' => '@hisite/views/mail',
        'htmlLayout' => '@hisite/views/layouts/mail-html',
        'textLayout' => '@hisite/views/layouts/mail-text',
        'useFileTransport' => $params['mailer.enabled'] ? false : true,
    ],
    'cache' => [
        '__class' => \yii\caching\FileCache::class,
    ],
    'i18n' => [
        '__class' => \yii\i18n\I18N::class,
        'translations' => [
            'hisite' => [
                '__class' => \yii\i18n\PhpMessageSource::class,
                'basePath' => '@hisite/messages',
            ],
        ],
    ],
]);
