<?php

use hisite\assets\TransitionAsset;
use yii\web\View;

/**
 * @var View $this
 * @var string $href
 */

TransitionAsset::register($this);
$this->registerJs("$('.view-content').redirectPage({href:'$href'});");

?>

<div class="view-content">
    <?= Yii::t('advancedhosting', 'You will be redirected after:') ?>&nbsp;<b><span id="timer-output"></span></b>
</div>
