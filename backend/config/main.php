<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-'.YII_ENV.'.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-'.YII_ENV.'.php')
);

return [
    'id' => 'app-backend',
	'name' => '后台管理系统',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
		'auth' => [
			'class' => 'mdm\admin\Module',
		],
	],
	'aliases' => [
		'@mdm/admin' => '@vendor/mdmsoft/yii2-admin',
	],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			],
		],
		'authManager' => [
			'class' => 'yii\rbac\DbManager', // 使用数据库管理配置文件
			'defaultRoles' => ['guest'],
		],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],

	# rbac access control
	'as access' => [
		'class' => 'mdm\admin\components\AccessControl',
		'allowActions' => [
			'site/*', //sites for access
			'debug/*',
			'ckeditor/*', // add your rbac rules if you nedd
			'authuser/*'
		]
	],
    'params' => $params,
];
