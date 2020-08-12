<?php

use yii\web\Application;
use Yiisoft\Composer\Config\Builder;

(function () {
    require __DIR__ . '/../config/bootstrap.php';

    $config = require Builder::path('web');

    (new Application($config))->run();
})();
