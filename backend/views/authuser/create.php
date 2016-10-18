<?php

/* @var $this yii\web\View */
/* @var $model common\models\Authuser */

$this->title = 'Create Authuser';
$this->params['breadcrumbs'][] = ['label' => 'Authusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authuser-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
