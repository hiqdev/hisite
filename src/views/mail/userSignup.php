<?php

/** @var yii\web\View $this */
/** @var yii\web\IdentityInterface $user */
/** @var yii\mail\MessageInterface $message */
/** @var string $token */
$org = Yii::$app->params['organization.name'];

$message->setSubject(Yii::t('hiam', '[{org}] New user signup', ['org' => $org]));

$message->renderTextBody(basename(__FILE__, '.php') . '-text', compact('user'));

?>
<div class="password-reset">
    <p><?= Yii::t('hiam', 'Hello,') ?></p>

    <p><?= Yii::t('hiam', 'New user signup:') ?></p>

    <p>
        <?= Yii::t('hiam', 'Login') ?>: <b><?= $user->username ?></b><br>
        <?= Yii::t('hiam', 'Email') ?>: <?= $user->email ?><br>

        <?php if (!empty($user->first_name)): ?>
            <?= Yii::t('hiam', 'First name') ?>: <?= $user->first_name ?><br>
        <?php endif ?>
        <?php if (!empty($user->last_name)): ?>
            <?= Yii::t('hiam', 'Last name') ?>: <?= $user->last_name ?><br>
        <?php endif ?>
        <br>

        <?php if (!empty($user->referralParams['referer'])): ?>
            <?= Yii::t('hiam', 'Referer') ?>: <?= $user->referralParams['referer'] ?><br>
            <br/>
        <?php endif ?>

        <?php if (!empty($user->referralParams['utmTags'])): ?>
            <?php foreach ($user->referralParams['utmTags'] as $key => $value) : ?>
                <?= $key ?>: <?= $value ?><br>
            <?php endforeach ?>
            <br/>
        <?php endif ?>

        <?= Yii::t('hiam', 'IP') ?>:  <?= Yii::$app->request->getRemoteIP() ?><br>
    </p>
</div>
