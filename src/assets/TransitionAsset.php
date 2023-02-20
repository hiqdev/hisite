<?php

namespace hisite\assets;

use yii\web\AssetBundle;

/**
 * Class TransitionAsset
 */
class TransitionAsset extends AssetBundle
{
    /**
     * {@inheridoc}
     */
    public $sourcePath = __DIR__;

    /**
     * {@inheridoc}
     */
    public $js = [
        'js/Transition.js'
    ];

    /**
     * {@inheridoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
