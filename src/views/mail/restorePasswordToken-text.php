<?php

/** @var yii\web\View $this */
/** @var yii\web\IdentityInterface $user */
/** @var string $resetLink */
/** @var hiqdev\php\confirmator\Token $token */
?>
<?= Yii::t('hiam', 'Hello {name},', ['name' => $user->name]) ?>

<?= Yii::t('hiam', 'Follow the link below to reset your password:') ?>

<?= $resetLink ?>
<?php if (!empty($token->get('notAfter'))) : ?>

<?= Yii::t('hiam', 'Attention! Link would be invalidated after {date} UTC', ['date' => $token->get('notAfter')]) ?>
<?php endif ?>
