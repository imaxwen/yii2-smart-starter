<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "backend\\widgets\\GridView" : "yii\\widgets\\ListView" ?>;
use backend\widgets\Box;

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row <?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">
	<div class="col-xs-12">
<?= "<?php \n" ?>
	Box::begin([
		'title' => '<i class="fa fa-list"></i> '.Html::encode($this->title),
		'type'  => Box::TYPE_DEFAULT,
		// 'solid'=> false,  # solide box-header
		// 'collapse'=> true,
		// 'tooltip' => 'tooltip text',
		// 'footer'  => 'footer',
	]);
<?= '?>' ?>

		<div class="row show-grid">
			<div class="col-xs-12"><?= "<?= " ?>Html::a(<?= $generator->generateString(Yii::t('app', 'Create') . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>, ['create'], ['class' => 'btn btn-success pull-right']) ?></div>
		</div>

<?php if(!empty($generator->searchModelClass)): ?>
<?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif; ?>

<?php if ($generator->indexWidgetType === 'grid'): ?>
    <?= "<?= " ?>GridView::widget([
        'dataProvider' => $dataProvider,
		'layout'  => "{items}\n{summary}{pager}",
        <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
            ['class' => 'yii\grid\SerialColumn'],

<?php
$count = 0;
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        if (++$count < 6) {
            echo "            '" . $name . "',\n";
        } else {
            echo "            // '" . $name . "',\n";
        }
    }
} else {
    foreach ($tableSchema->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        if (++$count < 6) {
            echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        } else {
            echo "            // '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }
}
?>

            ['class' => 'yii\grid\ActionColumn'],
        ],
		'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
    ]); ?>
<?php else: ?>
    <?= "<?= " ?>ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
        },
    ]) ?>
<?php endif; ?>
<?= '<?php' ?> Box::end();<?= "?>\n" ?>
	</div>
</div>
