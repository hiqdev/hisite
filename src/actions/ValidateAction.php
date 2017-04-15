<?php
/**
 * HiSite Yii2 base project
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hisite\actions;

use Yii;
use yii\di\Instance;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * Action to validate form with.
 */
class ValidateAction extends \yii\base\Action
{
    public $format = Response::FORMAT_JSON;

    public $form;

    public function run()
    {
        Yii::$app->response->format = $this->format;

        $model = Instance::ensure($this->form);
        $model->load(Yii::$app->request->post());

        return ActiveForm::validate($model);
    }
}
