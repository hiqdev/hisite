<?php
/**
 * hiqdev.com site
 *
 * @link      https://github.com/hiqdev/hiqdev.com-core
 * @package   hiqdev.com-core
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
