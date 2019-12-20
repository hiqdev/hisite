<?php
/**
 * HiSite Yii2 base project.
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hisite\controllers;

use hisite\actions\ContactAction;
use hisite\actions\RenderAction;
use hisite\models\ContactForm;
use hisite\models\LoginForm;
use Yii;
use yii\captcha\CaptchaAction;
use yii\web\ErrorAction;

class SiteController extends \yii\web\Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
            'captcha' => [
                'class' => CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'backColor' => 0x222222,
                'foreColor' => 0xFFFFFF,
            ],
            'index' => [
                'class' => RenderAction::class,
                'data' => function () {
                    return ['contactForm' => new ContactForm()];
                },
            ],
            'about' => [
                'class' => RenderAction::class,
            ],
            'policy' => [
                'class' => RenderAction::class,
            ],
            'contact' => [
                'class' => ContactAction::class,
            ],
        ];
    }

    /**
     * Login action.
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        return $this->render('login', compact('model'));
    }

    /**
     * Logout action.
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        $back = Yii::$app->request->post('back') ?: Yii::$app->request->get('back');

        return $back ? $this->redirect($back) : $this->goHome();
    }

    /**
     * Displays contact page and sends contact form.
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('contact', compact('model'));
    }

    /**
     * Action of redirect to admin panel after data submit
     *
     * @return string
     */
    public function actionTransition()
    {
        return $this->render('transition', [
            'href' => 'back',
        ]);
    }
}
