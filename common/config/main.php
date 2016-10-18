<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'language' => 'zh-CN',
	'controllerMap' => [
		'ckeditor' => [
			'class'    => 'maxwen\ckeditor\controllers\EditorController',
			'viewPath' => '@vendor/maxwen/yii2-ckeditor-widget/views/editor'
		],
		'elfinder' => [
			'class' => 'mihaildev\elfinder\PathController',
			'access' => ['@'],
			'root' => [
				'path' => '/uploads',
				'name' => 'root'
			]
		]
	],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'authManager' => [
			'class' => 'yii\rbac\DbManager',
			'defaultRoles' => ['guest'],
		],
		'assetManager' => [
			'class' => 'yii\web\AssetManager',
			'appendTimestamp' => YII_ENV_DEV ? true : false,
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'js' => [
						YII_ENV_DEV ? 'jquery.js' : 'jquery.min.js'
					]
				],
				'yii\bootstrap\BootstrapAsset' => [
					'css' => [
						YII_ENV_DEV ? 'css/bootstrap.css' : 'css/bootstrap.min.css',
					]
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'js' => [
						YII_ENV_DEV ? 'js/bootstrap.js' : 'js/bootstrap.min.js',
					]
				]
			],
		],
		'i18n' => [
			'translations' => [
				'*' => [
					'class' => 'yii\i18n\PhpMessageSource',
					'fileMap' => [
						'app' => 'app.php',
					],
				],
			],
		],
		'formatter' => [
			'datetimeFormat' => 'yyyy-MM-dd HH:mm',
			'decimalSeparator' => ',',
			'thousandSeparator' => ' ',
			'currencyCode' => 'CNY',
		],
    ],
];
