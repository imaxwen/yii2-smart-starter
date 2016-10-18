<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use insolita\wgadminlte\Box;

/* @var $this yii\web\View */
/* @var $model common\models\Authuser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row authuser-form">
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

    <?= $form->field($model, 'username')->textInput(['maxlength' => true])->widget(\mihaildev\elfinder\InputFile::className(), [
    	'language' => 'zh_CN'
	]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true])->widget(\dosamigos\fileupload\FileUpload::className(),[
		'attribute' => 'image',
		'url' => ['media/upload', 'id' => $model->id], // your url, this is just for demo purposes,
		'options' => ['accept' => 'image/*'],
		'clientOptions' => [
			'maxFileSize' => 2000000
		],
		// Also, you can specify jQuery-File-Upload events
		// see: https://github.com/blueimp/jQuery-File-Upload/wiki/Options#processing-callback-options
		'clientEvents' => [
			'fileuploaddone' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                            }',
			'fileuploadfail' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                            }',
		],
	]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->widget(\maxwen\ckeditor\CKEditor::className(), [
    	'enableElFinder' => true
	]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
		<div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
    </div>

    <?php ActiveForm::end(); ?>
	<?php Box::end();?>
	</div>
</div>
