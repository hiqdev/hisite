<?php

namespace hisite\assets;

use yii\web\AssetBundle;

/**
 * Class TransitionAsset
 * @package advancedhosters\themes\advancedhosting
 */
class TransitionAsset extends AssetBundle
{
    /**
     * {@inheridoc}
     */
    public $sourcePath = '@hisite/assets';

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
