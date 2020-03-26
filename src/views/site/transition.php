<?php

use hisite\assets\TransitionAsset;
use yii\web\View;

/**
 * @var View $this
 * @var string $href
 */

$delay = 3; //Time of page waiting

TransitionAsset::register($this);
$this->registerJs("$('.view-content').redirectPage({href:'$href', delay: $delay});");

?>

<div class="view-content">
    <?= Yii::t('hisite', 'You will be redirected in {sec} seconds', [
        'sec' => "<b><span id='timer-output'>$delay</span></b>",
    ]) ?>
</div>
