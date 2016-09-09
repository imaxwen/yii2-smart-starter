<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,

	'mdm.admin.configs' => [
		'userTable' => \common\models\User::tableName(),
		'menuTable' => '{{%auth_menu}}'
	]
];
