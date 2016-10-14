<?php

/* @var $this yii\web\View */

$this->title = Yii::t('hisite', 'Request password reset');
$this->params['breadcrumbs'][] = $this->title;

?>

<?= Yii::$app->themeManager->widget([
    'class' => 'LoginForm',
    'model' => $model,
    'texts' => [
        'header' => '',
        'message' => Yii::t('hisite', 'Please fill out your email. A link to reset password will be sent there.'),
    ],
    'shows' => [
        'signup' => true,
    ],
]) ?>
