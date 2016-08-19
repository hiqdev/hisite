<?php

/*
 * Client module for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-module-client
 * @package   hipanel-module-client
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hisite;

use Yii;

class MainMenu extends \hiqdev\menumanager\Menu
{
    protected $_addTo = 'main';

    public function items()
    {
        $login = Yii::$app->user->isGuest ? 'login' : 'logout';
        return [
            'home' => [
                'label' => Yii::t('hisite', 'Home'),
                'url'   => ['/site/index'],
            ],
            'about' => [
                'label' => Yii::t('hisite', 'About'),
                'url'   => ['/site/about'],
            ],
            'contact' => [
                'label' => Yii::t('hisite', 'Contact'),
                'url'   => ['/site/contact'],
            ],
            'login' => [
                'label' => Yii::t('hisite', ucfirst($login)),
                'url'   => ['/site/' . $login],
            ],
        ];
    }
}
