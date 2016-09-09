<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>欢迎您, <?=Yii::$app->user->identity->username; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
				'items' => \mdm\admin\components\MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callBack),
            ]
        ) ?>


</aside>

