<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use insolita\wgadminlte\Box;
use maxwen\ckeditor\CKEditor;
use maxwen\ckeditor\CKEditorInline;

/* @var $this yii\web\View */
/* @var $model common\models\AuthUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row auth-user-form">
	<div class="col-xs-12">
	<?php 
		Box::begin([
			'title' => '<i class="fa fa-edit"></i> '.Html::encode($this->title),
			'type'  => $model->isNewRecord ? Box::TYPE_SUCCESS : Box::TYPE_PRIMARY,
			// 'solid'=> false,  # solide box-header
			// 'collapse'=> true,
			// 'tooltip' => 'tooltip text',
			// 'footer'  => 'footer',
		]);
	?>

    <?php $form = ActiveForm::begin([
			'layout' => 'horizontal',
			'fieldConfig' => [
				'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
				'horizontalCssClasses' => [
					'label' => 'col-sm-2',
					// 'offset' => 'col-sm-offset-4',
					'wrapper' => 'col-sm-6',
					'error' => '',
					'hint' => '',
				]
			],
		]); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->widget(CKEditor::className(), [
		'options' => [
			'rows' => 6,
		]
	]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>


    <div class="form-group">
		<div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
    </div>

    <?php ActiveForm::end(); ?>
	<?php Box::end();?>
	</div>
</div>
