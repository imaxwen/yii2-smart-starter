<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,

	'mdm.admin.configs' => [
		'userTable' => \common\models\User::tableName(),
		'menuTable' => '{{%auth_menu}}'
	],

	/**
	 * CKEditor config rewrite
	 * @see http://docs.ckeditor.com/#!/api/CKEDITOR.config
	 */
	'ckeditorConfig' => [
		// custom options
		'language'   => 'zh-cn',
		'font_names' => '宋体;楷体;黑体;微软雅黑;隶书;仿宋;Arial;Comic Sans MS;Courier New;Tahoma;Times New Roman;Verdana',
		'toolbar'    => 'Full'
	],
];
