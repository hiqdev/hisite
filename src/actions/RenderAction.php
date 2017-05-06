<?php
/**
 * HiSite Yii2 base project.
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hisite\actions;

use Closure;
use yii\helpers\Inflector;

/**
 * This action renders view.
 *
 * @property array|Closure $params that will be passed to the view.
 * Every element can be a callback, which gets $this pointer as argument
 */
class RenderAction extends \yii\base\Action
{
    /**
     * @var string view to render
     */
    public $view;

    /**
     * @var array|Closure additional data passed when rendering
     */
    public $data = [];

    /**
     * @var array
     */
    public $_params = [];

    /**
     * Prepares params for rendering, executing callable functions.
     *
     * @return array
     */
    public function getParams()
    {
        $res = [];
        if ($this->_params instanceof Closure) {
            $res = call_user_func($this->_params, $this);
        } else {
            foreach ($this->_params as $k => $v) {
                $res[$k] = $v instanceof Closure ? call_user_func($v, $this) : $v;
            }
        }

        return array_merge($res, $this->prepareData($res));
    }

    /**
     * Prepares additional data for render.
     *
     * @param $data array Additional data, prepared by other classes. Optional
     * @return array
     */
    public function prepareData($data = [])
    {
        return (array) ($this->data instanceof Closure ? call_user_func($this->data, $this, $data) : $this->data);
    }

    /**
     * @param array $params
     */
    public function setParams($params)
    {
        $this->_params = $params;
    }

    /**
     * @return string [[view]] or [[scenario]]
     */
    public function getViewName()
    {
        return $this->view ?: lcfirst(Inflector::id2camel($this->controller->action->id));
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        return $this->controller->render($this->getViewName(), $this->getParams());
    }
}
