<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\web\IdentityInterface $user */
/** @var yii\mail\MessageInterface $message */
/** @var hiqdev\php\confirmator\Token $token */

$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['site/confirm-email', 'token' => (string) $token]);

$org = Yii::$app->params['organization.name'];

$message->setSubject(Yii::t('hiam', '[{org}] Please confirm your email address', ['org' => $org]));

$message->renderTextBody(basename(__FILE__, '.php') . '-text', compact('user', 'confirmLink', 'token'));

?>
<div class="password-reset">
    <p><?= Yii::t('hiam', 'Hello {name},', ['name' => Html::encode($user->name)]) ?></p>

    <p><?= Yii::t('hiam', 'Follow the link below to confirm your email:') ?></p>

    <p><?= Html::a(Html::encode($confirmLink), $confirmLink) ?></p>

    <?php if (!empty($token->get('notAfter'))) : ?>
        <p><?= Yii::t('hiam', 'Attention! The link is valid until {date} UTC', ['date' => $token->get('notAfter')]) ?></p>
    <?php endif ?>
</div>
