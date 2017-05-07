<?php

use hiqdev\thememanager\widgets\Markdown;

/** @var yii\web\View $this */
$this->title = Yii::$app->name;
$this->params['noTitle'] = true;

?>

<section id="main-slider" class="no-margin center">
    <div class="well">
        <p><img src="<?= $this->assetManager->publish('@hisite/assets/images/big_logo.png')[1] ?>" alt="Yii 2" /></p>
        <p>HiSite is a base project for building modular Yii2 web applications from plugins</p>
        <a href="https://github.com/hiqdev/hisite" class="btn btn-primary btn-lg" target="_blank">Github</a>
    </div>
</section>

<section id="services" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-twitter icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Building blocks</h3>
                        <p>Main goal of HiSite is to enable easy extending of Yii2 applications
                        with building blocks &mdash; pluggins: code combined with it's configuration.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-facebook icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Pluggable themes</h3>
                        <p>HiSite uses <a href="https://github.com/hiqdev/yii2-thememanager">yii2-thememanager</a>
                        theming library to enable changing theme as easy as changing
                        single line in <code>composer.json</code>.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-google-plus icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">More...</h3>
                        <ul>
                            <li>pluggable and extandable menus</li>
                            <li>automation with <a href="https://github.com/hiqdev/hidev">hidev</a></li>
                            <li>what else? ideas?</li>
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
                <?= Markdown::widget(['file' => '@hisite/../README.md']) ?>
            </div>
        </div>
    </div>
</section>
