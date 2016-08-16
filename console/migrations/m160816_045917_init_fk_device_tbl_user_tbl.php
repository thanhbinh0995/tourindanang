<?php

use yii\db\Migration;

class m160816_045917_init_fk_device_tbl_user_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_device_tbl_user_tbl", 'device', 'user_id', 'user', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_device_tbl_user_tbl", "device");
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
