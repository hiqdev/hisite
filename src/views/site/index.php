<?php

use hiqdev\thememanager\widgets\Markdown;

/** @var yii\web\View $this */
$this->title = Yii::$app->name;
$this->params['noTitle'] = true;
$hisitePath = dirname(__DIR__, 3);

?>

<section id="main-slider" class="no-margin center">
    <div class="well" align=center>
        <p><img src="<?= $this->assetManager->publish($hisitePath . '/src/assets/images/big_logo.png')[1] ?>" alt="Yii 2" /></p>
        <h4>HiSite is a base project for building modular Yii2 web applications from plugins</h4>
        <a href="https://github.com/hiqdev/hisite" class="btn btn-primary btn-lg" style="text-decoration:none" target="_blank"><i class="fa fa-github"></i>&nbsp;&nbsp;GitHub</a>
    </div>
</section>

<section id="services" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-cube icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Building blocks</h3>
                        <p>Main goal of HiSite is to enable easy creation and extending of Yii2 applications
                        with building blocks &mdash; pluggins &mdash; code combined with it's configuration.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-picture-o icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Pluggable themes</h3>
                        <p>HiSite uses <a href="https://github.com/hiqdev/yii2-thememanager">yii2-thememanager</a>
                        theming library to enable applying and changing theme as easy as changing
                        single line in <code>composer.json</code>.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-rocket icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">More...</h3>
                        <ul>
                            <li>pluggable and extandable menus with <a href="https://github.com/hiqdev/yii2-menus">yii2-menus</a></li>
                            <li>automation with <a href="https://github.com/hiqdev/hidev">hidev</a></li>
                            <li>article describing ideas behind HiSite coming soon</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?= Markdown::widget(['file' => $hisitePath . '/README.md']) ?>
            </div>
        </div>
    </div>
</section>
