<?php

/**
 * HiSite main page.
 *
 * @var yii\web\View View
 */
$this->title = Yii::$app->name;
$this->params['noTitle'] = true;

?>

<section id="main-slider" class="no-margin center">
    <div class="well">
        <p><img src="<?= $this->assetManager->publish('@hisite/assets/images/big_logo.png')[1] ?>" alt="Yii 2" /></p>
        <p>Smart way to create Yii2 project from building blocks.</p>
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
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-facebook icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Themes</h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-google-plus icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">More...</h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
        </div>
    </div>
</section><!--/#services-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="center">
                    <h2>Installation and getting started:</h2>
                </div>
                <div class="alert alert-warning center">
                    <p>If you do not have Composer, you may install it by following the instructions at <a href="getcomposer.org" target="_blank">getcomposer.org</a>.</p>
                </div>
                <ol>
                    <li>
                        <p>Run the following command: <code>composer create-project --prefer-dist --stability=dev hiqdev/hisite hisite.dev</code></p>
                        <div class="alert alert-warning center">
                            <p>During the installation process ... ... </p>
                        </div>
                    </li>
                    <li>
                        <p>Run command: <code>cd /my/path/to/hisite.dev/</code> and go to main application directory.</p>
                    </li>
                    <li>
                        <p>Run command: <code>...</code> to ...</p>
                    </li>
                    <li>
                        <p>Run command: <code>./vendor/bin/hidev install</code> to initialize the application.</p>
                    </li>
                    <li>
                        <p>Run command: <code>./vendor/bin/hidev deploy</code> to deploy site to nginx.</p>
                    </li>
                </ol>

                <div class="center">
                    <h3>Notes:</h3>
                </div>
                <p>...</p>

                <div class="center">
                    <h3>Themes:</h3>
                </div>
                <p>Available themes are:</p>
                <ol>
                    <li><b>original</b> - original Yii2 theme from basic application template, <a href="https://github.com/hiqdev/yii2-theme-original"><code>hiqdev/yii2-theme-original</code></a></li>
                    <li><b>flat</b> - nice flat theme from <a href="http://shapebootstrap.net/item/flat-theme-free-responsive-multipurpose-site-template/" target="_blank">here</a>, <a href="https://github.com/hiqdev/yii2-theme-flat"><code>hiqdev/yii2-theme-flat</code></a></li>
                </ol>
            </div>
        </div><!--/.row-->
    </div>
</section>
