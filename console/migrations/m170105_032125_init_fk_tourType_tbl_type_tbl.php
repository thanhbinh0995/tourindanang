<?php
 
use yii\db\Migration;

class m170105_032125_init_fk_tourType_tbl_type_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_tourType_tbl_type_tbl", 'tourtype', 'typeId', 'type', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_tourType_tbl_type_tbl", "tourtype");
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
