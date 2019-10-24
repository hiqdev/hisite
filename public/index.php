<?php

use hiqdev\composer\config\Builder;
use yii\web\Application;

(function () {
    require __DIR__ . '/../config/bootstrap.php';

    $config = require Builder::path('web');

    (new Application($config))->run();
})();
