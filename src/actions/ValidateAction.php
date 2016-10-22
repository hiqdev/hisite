<?php

namespace hisite\actions;

use Yii;
use yii\web\Response;
use yii\di\Instance;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/**
 * Action to validate form with
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

