<?php

namespace hisite\actions;

use Closure;
use Yii;
use yii\helpers\Url;

/**
 * @property array|string|Closure url the URL for redirect. Can be string, array or Closure
 */
class RedirectAction extends \yii\base\Action
{
    /**
     * @var string|array url to redirect to
     */
    protected $_url;

    /**
     * Collects the URL array, executing callable functions.
     * @return string|array default return to previous page (referer)
     */
    public function getUrl()
    {
        if ($this->_url instanceof Closure) {
            return call_user_func($this->_url, $this);
        }

        return $this->_url ?: Yii::$app->request->referrer;
    }

    /**
     * @param $url
     */
    public function setUrl($url)
    {
        $this->_url = $url;
    }

    public function run()
    {
        return $this->controller->redirect($this->getUrl());
    }
}
