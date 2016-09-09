<?php
namespace backend\gii\controllers;

use Yii;
use yii\gii\controllers\DefaultController as GiiController;

/**
 * 集成Gii默认控制器
 * @author Max.wen
 */
class DefaultController extends GiiController
{
//    public $layout = '@backend/views/layouts/main';

    public function actionIndex()
    {
		$this->layout = 'main';
        return $this->render('index');
    }
}
