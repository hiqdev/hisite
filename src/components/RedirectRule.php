<?php
/**
 * HiSite Yii2 base project.
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hisite\components;

use yii\web\UrlRule;

class RedirectRule extends UrlRule
{
    public $rules = [];

    public function createUrl($manager, $route, $params)
    {
        return false;
    }
}
