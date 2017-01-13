<?php

use yii\db\Migration;

class m170113_151550_init_fk_tour_type_tbl_type_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_tour_type_tbl_type_tbl", 'tour_type', 'typeId', 'type', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_tour_type_tbl_type_tbl", "tour_type");
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
