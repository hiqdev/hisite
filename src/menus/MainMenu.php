<?php
/**
 * HiSite Yii2 base project
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hisite\menus;

use Yii;

class MainMenu extends \hiqdev\yii2\menus\Menu
{
    public function items()
    {
        $logOp = Yii::$app->user->isGuest ? 'login' : 'logout';

        return [
            'home' => [
                'label' => Yii::t('hisite', 'Home'),
                'url' => ['/site/index'],
            ],
            'about' => [
                'label' => Yii::t('hisite', 'About'),
                'url' => ['/site/about'],
            ],
            'contact' => [
                'label' => Yii::t('hisite', 'Contact'),
                'url' => ['/site/contact'],
            ],
            $logOp => [
                'label' => Yii::t('hisite', ucfirst($logOp)),
                'url' => ['/site/' . $logOp],
            ],
        ];
    }
}
