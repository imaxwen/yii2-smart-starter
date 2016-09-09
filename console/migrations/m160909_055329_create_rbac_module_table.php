<?php

use yii\db\Migration;

/**
 * Handles the creation for table `rbac_module`.
 */
class m160909_055329_create_rbac_module_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
    	$sql = file_get_contents(__DIR__ . '/rbac-schema-mysql.sql');
        $this->execute($sql);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('rbac_module');
    }
}
