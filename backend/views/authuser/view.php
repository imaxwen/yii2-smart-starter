<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use insolita\wgadminlte\Box;

/* @var $this yii\web\View */
/* @var $model common\models\Authuser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Authusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row authuser-view">
	<div class="col-xs-12">
	<?php 
		Box::begin([
			'title' => '<i class="fa fa-eys"></i> '.Html::encode($this->title),
			'type'  => $model->isNewRecord ? Box::TYPE_SUCCESS : Box::TYPE_PRIMARY,
			// 'solid'=> false,  # solide box-header
			// 'collapse'=> true,
			// 'tooltip' => 'tooltip text',
			// 'footer'  => 'footer',
		]);
	?>    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定要删除此项吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>
	<?php Box::end();?>
<!-- // Box end -->
	</div>
</div>
