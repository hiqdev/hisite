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

use hisite\models\ContactForm;
use Yii;

class ContactAction extends \yii\base\Action
{
    public $redirect = true;

    public $redirectUrl = '/';

    public $anchor = 'contact';

    public function run()
    {
        if (Yii::$app->request->isPost) {
            $model = new ContactForm();
            if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('contactFormSubmitted');

                if ($this->redirect) {
                    return $this->controller->redirect(['/', '#' => $this->anchor]);
                } else {
                    return $this->controller->refresh('#' . $this->anchor);
                }
            }
        }
    }
}
