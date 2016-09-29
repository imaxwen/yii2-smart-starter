<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AuthUser */

$this->title = 'Update Auth User: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Auth Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auth-user-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
