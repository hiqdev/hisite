<?php

/** @var yii\web\View $this */
/** @var yii\web\IdentityInterface $user */
/** @var string $confirmLink */
/** @var hiqdev\php\confirmator\Token $token */
?>
<?= Yii::t('hiam', 'Hello {name},', ['name' => $user->name]) ?>

<?= Yii::t('hiam', 'Follow the link below to confirm your email:') ?>

<?= $confirmLink ?>
<?php if (!empty($token->get('notAfter'))) : ?>

<?= Yii::t('hiam', 'Attention! Link would be invalidated after {date} UTC', ['date' => $token->get('notAfter')]) ?>
<?php endif ?>

