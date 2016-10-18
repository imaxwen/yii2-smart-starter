<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Authuser */

$this->title = 'Update Authuser: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Authusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="authuser-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
