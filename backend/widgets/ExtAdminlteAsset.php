<?php

namespace backend\widgets;

use \yii\web\AssetBundle;

class ExtAdminlteAsset  extends AssetBundle{
    public $sourcePath = '@backend/widgets/js';

    public $js = [
		'admlteext.js',
    ];

    public $depends=[
        'yii\web\YiiAsset',
        'backend\widgets\JCookieAsset'
    ];
}

