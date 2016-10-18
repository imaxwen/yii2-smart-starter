<?php

use yii\helpers\Html;
use backend\widgets\GridView;
use insolita\wgadminlte\Box;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AuthuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Authusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row authuser-index">
	<div class="col-xs-12">
<?php 
	Box::begin([
		'title'    => '<i class="fa fa-list"></i> '.Html::encode($this->title),
		'type'     => Box::TYPE_DEFAULT,
		// 'solid'    => true,
		// 'tooltip'  => 'tooltip',
		// 'footer'   => 'this is footer',
		'collapse' => false,
		'left_tools'=> Html::a('新增Authuser', ['create'], ['class' => 'btn btn-success btn-sm'])
		]);
?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<div class="row">
		<div class="col-sm-12">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
		'layout'  => "{items}\n{summary}{pager}",
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
		'tableOptions' => ['class' => 'table table-striped table-bordered table-hover dataTable'],
    ]); ?>
		</div>
	</div>
<?php Box::end();?>
	</div>
</div>
